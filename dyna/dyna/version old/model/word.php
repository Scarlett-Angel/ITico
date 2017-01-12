 <?php
class model_word {
	public function id_to_word( $wordID ) {
		$query = 'SELECT word FROM word WHERE id = ?';
		$stmt  = DB::cxn()->prepare( $query );
		$stmt->bind_param( "i", $wordID );
		$stmt->execute();
		$stmt->bind_result( $word );
		while ( $row = $stmt->fetch() ) {
			$word = $word;
		} //$row = $stmt->fetch()
		return isset( $word ) ? $word : false;
	}
}
?> 