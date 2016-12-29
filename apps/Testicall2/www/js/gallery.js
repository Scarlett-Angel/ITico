/* 
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

document.addEventListener("deviceready", onDeviceReady, false);
var imageContents;
function onDeviceReady() 
{
     app.initialize();
     getMultipleRows();
}
function getMultipleRows()
{
    var db = window.sqlitePlugin.openDatabase({name: "my.db"});
    db.transaction
            (
                    function (tx)
                    {
                        tx.executeSql
                                (
                                        'SELECT PictureFile FROM img_table',
                                        [],
                                        function (tx, results)
                                        {
                                            var len = results.rows.length;
                                            if (len > 0)
                                            {
                                                for (var i = 0; i < len; i++)
                                                {
                                                    alert(results.rows.item(i)['ColumnName']);
                                                    imageContents += '<img src="' + results.rows.item(i)['PictureFile'] +'">';
                                                }
                                            }
                                        }, errorCB
                                        );
                    }, errorCB, successCB
                    );
            $('#imageGallery').append(imageContents);
}

