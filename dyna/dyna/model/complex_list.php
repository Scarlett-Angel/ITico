<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of complex_list
 *
 * @author user
 */
class model_complex_list {

    public function id_to_word_ids($list_id) {
        $query = "SELECT complexID, type FROM complex_list_item WHERE complexListID = ?;;";
        $stmt = DB::cxn()->prepare($query);
        $stmt->bind_param("i", $list_id);
        if ($stmt->execute()) {
            $stmt->bind_result($value, $type);
            while ($row = $stmt->fetch()) {
                $row_set[] = $type.'.'.$value;
            }
            return isset($row_set) ? $row_set : false;
        }
    }

}
