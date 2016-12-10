if (!window.indexedDB) { alert("No IndexedDB.") } else {alert("IndexedDB should be OK")}

html5rocks.indexedDB.addTodo("qwerty");

 html5rocks.indexedDB.deleteDatabase("todos");

 var req = indexedDB.deleteDatabase("todos");
req.onsuccess = function () {
    console.log("Deleted database successfully");
};
req.onerror = function () {
    console.log("Couldn't delete database");
};
req.onblocked = function () {
    console.log("Couldn't delete database due to the operation being blocked");
};


html5rocks.indexedDB.open();

html5rocks.indexedDB.createObjectStore('todo', {keyPath: 'timeStamp', autoIncrement: true});