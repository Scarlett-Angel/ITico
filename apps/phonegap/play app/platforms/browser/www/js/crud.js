/* DWT
 based on http://pastebin.com/nnrNkk8T 
 see https://developer.mozilla.org/en-US/docs/IndexedDB#Browser_compatibility
 */
// events

$(function () {
    $('#addButton').on('click tap', function (e) {
        slenderSpotter.indexedDB.addTodo($('#todo').val());
        $('#todo').val('');
        return false;
    });

    $('#todos').on('click tap', '.delete', function (e) {
        slenderSpotter.indexedDB.deleteTodo(parseInt($(this).parent().find('.key').text()));
        return false;
    });

    // DWT - add update event handler to [Update] text, this event handler modeled on delete event handler which also refers to a specific record
    $('#todos').on('click tap', '.update', function (e) {
        var todoText = $(this).parent().find('.todoText').text(); // DWT - todoText of record is within the visible span
        var key = parseInt($(this).parent().find('.key').text()); // DWT - key that identifies the record is within the invisble span
        console.log('todoText: ', todoText, ' key: ', key); // DWT - handy for debugging
        slenderSpotter.indexedDB.updateTodo(todoText, key);
        return false;
    });

    $('#deleteDB').on('click tap', function (e) {
        if (
                window.confirm("Do you really want to remove entire DB?")
                &&
                window.confirm("Do you REALLY, REALLY want to remove entire DB?")
                )
            indexedDB.deleteDatabase("todoDB");
        logging("Deleting database, refresh page to update display");
    });

    $('#clearLog').on('click tap', function (e) {
        $('#loggingList').html("");
    });

    //slenderSpotter.indexedDB.open(); // open displays the data previously saved	

});

/* from original example, not sure if needed as the slenderSpotter namespace is going to be used instead of the window namespace but will leave just incase it might solve some bugs in the future. Tested and it works without this code.
 // indexeddb
 window.indexedDB = window.indexedDB || window.webkitIndexedDB || window.mozIndexedDB || window.msIndexedDB;
 window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction;
 window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange;*/

var slenderSpotter = {}; // namespace (not required)
slenderSpotter.indexedDB = {}; // open, addTodo, getAllTodoItems, deleteTodo - are own methods
slenderSpotter.indexedDB.db = null; // holds the real instance of the indexedDB


// open/create
slenderSpotter.indexedDB.open = function () {
    // you must increment the version by +1 in order to get the 'onupgradeneeded' event called
    // ONLY there you can modify the db itself e.g create new object stores and etc.
    var request = indexedDB.open('todoDB', 7);
    console.log(request);
    //window.alert("request "+request);
    logging("open create request ", request);
    request.onupgradeneeded = function (e) {
        console.log('onupgradeneeded', e);
        slenderSpotter.indexedDB.db = e.target.result;
        var db = slenderSpotter.indexedDB.db;
        console.log('db', db);
        logging('onupgradeneeded', e.value, 'db', db);
        if (!db.objectStoreNames.contains('todo')) {
            db.createObjectStore('todo', {keyPath: 'timeStamp', autoIncrement: true});
        }
    };

    request.onsuccess = function (e) {
        console.log('onsuccess', e);
        slenderSpotter.indexedDB.db = e.target.result;
        var db = slenderSpotter.indexedDB.db;
        console.log('db', db);
        logging('open/create success db', db);
        // START chrome (obsolete - will be removed)
        if (typeof db.setVersion === 'function') {
            var versionReq = db.setVersion(3);
            versionReq.onsuccess = function (e) {
                console.log('versionReq', e);

                slenderSpotter.indexedDB.db = e.target.source; // instead of result
                var db = slenderSpotter.indexedDB.db;
                console.log('db', db);

                if (!db.objectStoreNames.contains('todo')) {
                    db.createObjectStore('todo', {keyPath: 'timeStamp', autoIncrement: true});
                }
            }
        }
        // END chrome

        slenderSpotter.indexedDB.getAllTodoItems();
    };
    request.onerror = function (e) {
        console.log('onerror', e);
        //window.alert('onerror '+ e);
        logging('open/create onerror', e.value);
    };
};


// add
slenderSpotter.indexedDB.addTodo = function (todoText) {
    var db = slenderSpotter.indexedDB.db;
    var trans = db.transaction(['todo'], 'readwrite');
    var store = trans.objectStore('todo');
    var request = store.put({
        'text': todoText,
        'timeStamp': new Date().getTime()
    });
    logging("add request ", request)
    request.onsuccess = function (e) {
        // Re-render all the todo's
        logging("add success ", e)
        slenderSpotter.indexedDB.getAllTodoItems();
    };

    request.onerror = function (e) {
        console.log(e.value);
        //window.alert("onerror "+e.value);
        logging("add onerror ", e.value)
    };
    return false;
};

// read
slenderSpotter.indexedDB.getAllTodoItems = function () {
    $('#todos').html('');

    var db = slenderSpotter.indexedDB.db;
    var trans = db.transaction(['todo'], 'readwrite');
    var store = trans.objectStore('todo');

    // Get everything in the store;
    var keyRange = IDBKeyRange.lowerBound(0);
    var cursorRequest = store.openCursor(keyRange);

    cursorRequest.onsuccess = function (e) {
        var result = e.target.result;
        logging("cursor request success");
        if (!!result == false)
            return;
        renderTodo(result.value);
        result.continue();
    };

    cursorRequest.onerror = slenderSpotter.indexedDB.onerror;
};

// delete
slenderSpotter.indexedDB.deleteTodo = function (id) {
    var db = slenderSpotter.indexedDB.db;
    var trans = db.transaction(['todo'], 'readwrite');
    var store = trans.objectStore('todo');

    var request = store.delete(id);
    logging("delete request", request);

    request.onsuccess = function (e) {
        logging("delete success", e);
        slenderSpotter.indexedDB.getAllTodoItems();  // Refresh the screen
    };

    request.onerror = function (e) {
        console.log(e);
        logging("delete error", e);
    };
};

// DWT - update - inspired by add function which needs todoText as aurgument 
// DWT - also inspired by delete function that needs a key as argument
// DWT - an update function needs both these arguments
slenderSpotter.indexedDB.updateTodo = function (todoText, id) {
    var db = slenderSpotter.indexedDB.db;
    var trans = db.transaction(['todo'], 'readwrite');
    var store = trans.objectStore('todo');

    var request = store.put({
        'text': todoText, // DWT - amend with todoText supplied by function call 
        'timeStamp': id // DWT - amend existing record so use existing id supplied by function call
    });

    request.onsuccess = function (e) {
        slenderSpotter.indexedDB.getAllTodoItems();  // Refresh the screen
        logging("update sucess", e)
    };

    request.onerror = function (e) {
        console.log(e);
        logging("update error", e)
    };
};

// helper
function renderTodo(row) {
    /*
     DWT - change the generated li item to enable Update functionality
     DWT - add span with class to identify todoText to faciltate extracting todoText for update function call
     DWT - include contenteditable (HTML5) for todoText rather than convert to input form
     DWT - add clickable [Update] link
     */
    var li = '<li><span class="todoText" contenteditable="true">' + row.text + '</span> &nbsp; <a href="#" class="update">[Update]</a> &nbsp; <a href="#" class="delete">[Delete]</a><span class="key">' + row.timeStamp + '</span></li>';
    $('#todos').append(li);
}

// logging
function logging() {
    var log = $('#loggingList');
    args = Array.prototype.slice.call(arguments);
    log.append("<li>-------</li>");
    for (var i in args) {
        log.append("<li>" + arguments[i] + "</li>");
    }
}
