<?php
header('content-type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
$term = isset($_GET['term']) ? $_GET['term'] . '%': 'test%';
$conn = new mysqli('localhost', 'root','','soup');
$query = 'SELECT id as value, word as label FROM word where word LIKE ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $term);
    if ($stmt->execute()){
        $stmt->bind_result($value,$label);
		$i = 0;
        while($row = $stmt->fetch() && $i < 10){
            $row_set[] = array('value'=>$value, 'label'=>$label);
			$i=$i+1;
        }
    }
echo json_encode($row_set);//format the array into json data
$stmt->close();
$conn->close();

?>