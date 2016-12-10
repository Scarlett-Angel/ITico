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
var widgetsDb, dbLoaded;

function movePic(file){
    window.resolveLocalFileSystemURI(file, resolveOnSuccess, resOnError);
}

//Callback function when the file system uri has been resolved
function resolveOnSuccess(entry){
    var d = new Date();
    var n = d.getTime();
    //new file name
    var newFileName = n + ".jpg";
    var myFolderApp = "EasyPacking";

    window.requestFileSystem(LocalFileSystem.PERSISTENT, 0, function(fileSys) {
    //The folder is created if doesn't exist
    fileSys.root.getDirectory( myFolderApp,
                    {create:true, exclusive: false},
                    function(directory) {
                        entry.moveTo(directory, newFileName,  successMove, resOnError);
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
};

var options = {
	  enableHighAccuracy: true,
	  timeout: 5000,
	  maximumAge: 0
};

function capturePhoto(){
    navigator.camera.getPicture(savePhoto,null,{sourceType:1,quality:60})
}

window.widgetDbService = {};
document.addEventListener('deviceready', initWidgetsDb);
function initWidgetsDb() {
  window.sqlitePlugin //cordova sqlite plugin
    .openDatabase({
        name: cordova.file.applicationDirectory + 'my.db', //db file name
				location: 'default'
      }, function success(db) {
        window.WidgetsDb = db; //If debug build, handy to have accessible to window
	widgetsDb = db;  //private reference available only within this closure
	seedDb();  //function that seeds initial data if needed
      }, function error(e) {
        console.log("failed to create db!")
      });
}

function seedDb() {
  var defer = window.Q.deferred();

  //dbLoaded variable will be the promise - that way we can always safely query the db
  dbLoaded = defer.promise;

  var createSql = 'CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)';

  widgetsDb.transaction(function(t) {
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
}

function savePhoto(data){
  navigator.geolocation.getCurrentPosition(GeoSuccess, error, options);
 console.log(data)
 widgetsDb.transaction(function(tx) {
	//  tx.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)');
	//  tx.executeSql("INSERT INTO img_table (data, data_num) VALUES (?,?)");
	//  tx.executeSql('INSERT INTO Photos(PhotoID, PictureFile, Longitude, Latitude, Timestamp ) VALUES( '+ timestamp+' ,' + data + '", ' +  cameraLong +', '+ cameraLat  +'")');
 });
 //output image to screen
  cameraPic.src =  data;
}

function GeoSuccess(position) {
    cameraLat = position.coords.latitude;
    console.log(cameraLat);
    cameraLong = position.coords.longitude;
    console.log(cameraLong);
    cameraTimestamp = position.timestamp;
    console.log(cameraTimestamp);
}
