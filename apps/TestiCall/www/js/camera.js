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
  tx.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, PictureFile blog, Longitude text, Latitude text)');
 
  tx.executeSql("INSERT INTO img_table (data, data_num) VALUES (?,?)");
   tx.executeSql('INSERT INTO Photos(PhotoID, PictureFile, Longitude, Latitude, Timestamp ) VALUES( '+ timestamp+' ,' + data + '", ' +  cameraLong +', '+ cameraLat  +'")');
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

