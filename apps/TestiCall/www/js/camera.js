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

function capturePhoto(){
    navigator.camera.getPicture(savePhoto,null,{sourceType:1,quality:60});
}
function savePhoto(data){
 navigator.geolocation.getCurrentPosition(GeoSuccess, geoFail);
 var db = window.sqlitePlugin.openDatabase({name: "my.db"});
 
 
 db.transaction(function(tx) {
  tx.executeSql('CREATE TABLE IF NOT EXISTS img_table (PhotoID, PictureFile, Longitude, Latitude, Timestamp id integer primary key, data text, data_num integer)');
 
  tx.executeSql("INSERT INTO test_table (data, data_num) VALUES (?,?)", ["test", 100], function(tx, res) {
    console.log("insertId: " + res.insertId + " -- probably 1");
    console.log("rowsAffected: " + res.rowsAffected + " -- should be 1");
 
  }, function(e) {
    console.log("ERROR: " + e.message);
  });
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

