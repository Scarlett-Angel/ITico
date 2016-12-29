/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
//Create the database
document.addEventListener('deviceready', onDeviceReady, false);
function onDeviceReady() {
    var db = window.openDatabase('MyDB', '1.0', 'My test DB', 5242880);
    $('#console').append('<p>db opened</p>');
    db.transaction(runTransaction, error, success);
}
function runTransaction(t) {
    t.executeSql('CREATE TABLE IF NOT EXISTS img_table (id integer primary key, path text, Longitude text, Latitude text)');
}
function error(err) {
    console.log('Error creating tables: ' + err);
    $('#console').append('<p>error creating db' + err + '</p>');
}
function success() {
    console.log('Successfully created tables');
    $('#console').append('<p>created table</p>');
}

//take photo and output to screen
function photo1() {
    navigator.camera.getPicture(photoToScreen, null, {sourceType: 1, quality: 40});
}
function photoToScreen(data) {
    cameraPic.src = "data:image/jpeg;base64," + data;

}


//take photo and store in the dob
function photoToDB() {
    navigator.camera.getPicture(photoStore, null, {sourceType: 1, quality: 40});
    console.log('photo taken');
}
function photoStore(file) {
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
    t.executeSql("INSERT INTO img_table (path) VALUES ('" + entry.fullPath + "')");
}

function resOnError(error) {
    $('#console').append('<p>no store image</p>');
}