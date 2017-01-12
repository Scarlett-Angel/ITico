<?php
class controller_word_list {
	private $private_list_id;
	public function get_set_list_id( $id = null ) {
		if ( $id === Null ) {
			return $this->private_list_id;
		} //$id === Null
		else {
			$this->private_list_id = $id;
		}
	}
    private $private_word_list_ids = array();
	public function get_set_word_list_ids( $ids = null ) {
		if ( $ids === Null ) {
			return $this->private_word_list_ids;
		} //$id === Null
		else {
			$this->private_word_list_ids = $ids;
		}
	}
    private $private_word_list_words;
    public function get_set_word_list_words( $words = null){
        if ( $words === Null) {
            return $this->private_word_list_words;
        }
        else {
            $this->private_word_list_words = $words;
        }
    }
	public function load_ids_from_id( $list_id = null ) {
		$model_word_list = new model_word_list;
		if ( $list_id === null && $this->private_list_id !== Null ) {
			$list_id = $this->private_list_id;
		} //$id === null && $this->private_word_id !== Null
		$word_list_ids = $model_word_list->id_to_word_ids( $list_id );
		if ( $word_list_ids !== false ) {
			$this->private_word_list_ids = $word_list_ids;
		} //$word_list_ids === false
		else {
			return false;
		}
	}
    public function rand_word_from_list( $list_id = null) {
        if ($list_id !== null || $this->private_word_list_ids!== Null ){
            if($list_id !== null ){
				$model_word_list = new model_word_list;
				$model_word = new model_word;
				$word = $model_word->id_to_word($model_word_list->id_to_rand_word_id($list_id));
				if ($word !== false){
					return $word;
				}
				else{
					return false;
				}
			}
			else{
				$model_word = new model_word;
				$word = $model_word->id_to_word(array_rand($this->private_word_list_ids),1);
				if ($word !== false){
					return $word;
				}
				else{
					return false;
				}
			}
        }

    }
}
