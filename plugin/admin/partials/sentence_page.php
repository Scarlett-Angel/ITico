<?php
/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
?>
<div id="display"></div>
<div class="honours-container">
    <p>Please input a sentence id or create a new one.</p>
    <form ' method="GET">
        <input type="hidden" name="action" value="newList" />
        <h3>Make New List</h3>
        <label>Name of List</label> <input type='text' name='listName' value='' id='newlistName /'>
        <label>Owner ID</label><input type='text' name='ownerID' value='' id='ownerID'>
        <input type='submit' value='make new list' id='newListSubmit'>
    </form>
    <form action='<?php echo plugin_dir_url(__file__) . 'sentence_api.php'; ?>' method="GET" />
        <input type="hidden" name="action" value="newWord" />
        <label>Add word to sentence</label><input type="text" name="new_word" id="new_word"  value="" />
        <input type='submit' value='add word' id='newWordSubmit'>
    </form>
</div>
