<?php
class model_word_list{
    public function id_to_word_ids($list_id){
        $query = "SELECT wordID FROM word_list_item WHERE wordListID = ?;";
        $stmt = DB::cxn()->prepare($query);
        $stmt->bind_param("i", $list_id);
        if($stmt->execute()){
            $stmt->bind_result($word);
            while($row = $stmt->fetch()){
                $row_set[] = $word;
            }
            return isset($row_set) ? $row_set : false;
        }
    }
    public function id_to_rand_word_id($list_id){
        $query = "SELECT wordID FROM word_list_item WHERE wordListID = ? order by rand() limit 1;";
        $stmt = DB::cxn()->prepare($query);
        $stmt->bind_param("i", $list_id);
        if($stmt->execute()){
            $stmt->bind_result($word);
            while($row = $stmt->fetch()){
                $row_set = $word;
            }
            return isset($row_set) ? $row_set : false;
        }
    }
}
?>