/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */



var cameraLat;
var cameraLong;
var cameraTimestamp;
var destinationType;
function consoleToScreen(message){
    
}
document.addEventListener('deviceready', onDeviceReady, false);
function onDeviceReady() {
    var db = window.openDatabase('MyDB', '1.0', 'My test DB', 5242880);
    db.transaction(runTransaction, error, success);
}
function runTransaction(t) {
    t.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)');
}
function error(err) {
    var message = 'Error creating tables: ' + err;
    $('#console').append('<p>'+message+'</p>');
}
function success() {
    var message = 'Successfully created tables';
    $('#console').append('<p>'+message+'</p>');
}
function capturePhoto() {
    navigator.camera.getPicture(savePhoto, null, {sourceType: 1, quality: 60});
}
var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
};
function savePhoto(data) {
    navigator.geolocation.getCurrentPosition(GeoSuccess, error, options);
    console.log(data)
    widgetsDb.transaction(function (tx) {
        //  tx.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)');
        //  tx.executeSql("INSERT INTO img_table (data, data_num) VALUES (?,?)");
        //  tx.executeSql('INSERT INTO Photos(PhotoID, PictureFile, Longitude, Latitude, Timestamp ) VALUES( '+ timestamp+' ,' + data + '", ' +  cameraLong +', '+ cameraLat  +'")');
    });
    //output image to screen
    cameraPic.src = data;
}
function GeoSuccess(position) {
    cameraLat = position.coords.latitude;
    console.log(cameraLat);
    cameraLong = position.coords.longitude;
    console.log(cameraLong);
    cameraTimestamp = position.timestamp;
    console.log(cameraTimestamp);
}
function movePic(file) {
    window.resolveLocalFileSystemURI(file, resolveOnSuccess, resOnError);
}

//Callback function when the file system uri has been resolved
function resolveOnSuccess(entry) {
    var d = new Date();
    var n = d.getTime();
    //new file name
    var newFileName = n + ".jpg";
    var myFolderApp = "EasyPacking";

    window.requestFileSystem(LocalFileSystem.PERSISTENT, 0, function (fileSys) {
        //The folder is created if doesn't exist
        fileSys.root.getDirectory(myFolderApp,
                {create: true, exclusive: false},
                function (directory) {
                    entry.moveTo(directory, newFileName, successMove, resOnError);
                },
                resOnError);
    },
            resOnError);
}

//Callback function when the file has been moved successfully - inserting the complete path
function successMove(entry) {
    //I do my insert with "entry.fullPath" as for the path
}

function resOnError(error) {
    alert(error.code);
}

function error(err) {
    console.warn('ERROR(' + err.code + '): ' + err.message);
}









/*function createDB() {
 var myDB = window.sqlitePlugin.openDatabase({name: "mySQLite.db", location: 'default'});
 myDB.transaction(function (transaction) {
 transaction.executeSql('CREATE TABLE IF NOT EXISTS phonegap_pro (id integer primary key, title text, desc text)', [],
 function (tx, result) {
 $('#console').append('<p>table created</p>');
 },
 function (error) {
 $('#console').append('<p>failed to create table</p>');
 });
 });
 }*/
/*var db = null;
 
 document.addEventListener('deviceready', function() {
 $('#console').append('<p>device is ready</p>');
 db = window.sqlitePlugin.openDatabase({name: 'testical.db', location: 'default'});
 db.transaction(function(tx) {
 tx.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)');
 }, function(error) {
 console.log('Transaction ERROR: ' + error.message);
 $('#console').append('<p>failed to create db' + error.mesage + '</p>');
 }, function() {
 $('#console').append('<p>Populated database OK</p>');
 });
 });*/
/*function initWidgetsDb() {
 $('#console').append('<p>device is ready</p>');
 window.sqlitePlugin //cordova sqlite plugin
 .openDatabase({
 name: cordova.file.applicationDirectory + 'my.db', //db file name
 location: 'default'
 }, function success(db) {
 window.WidgetsDb = db; //If debug build, handy to have accessible to window
 widgetsDb = db;  //private reference available only within this closure
 seedDb();  //function that seeds initial data if needed
 }, function error(e) {
 $('#console').append('<p>failed to create db</p>');
 });
 }*/

/*function seedDb() {
 var defer = window.Q.deferred();
 
 //dbLoaded variable will be the promise - that way we can always safely query the db
 dbLoaded = defer.promise;
 
 var createSql = 'CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)';
 
 widgetsDb.transaction(function (t) {
 t.executeSql(createSql, []);
 
 //   initialWidgets.forEach(function insertOrIgnore(w) {
 //     t.executeSql(
 //       'INSERT OR IGNORE INTO Widget (name, color, sku, quantity) VALUES (?,?,?,?),'
 //       //params array is used to populate param placeholders (?) - and in the order in which they appear
 //       //[w.name, w.color, w.sku, w.qty]
 //     );
 //   });
 // }, function error(e) {
 //   //typically only hit this if there are issues with your SQL statements
 // }, function success() {
 //   defer.resolve(); //now it is ready to be queried against
 });
 }*/