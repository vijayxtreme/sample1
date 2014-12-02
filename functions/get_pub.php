<?php
//get pub.php
header("Content-type: application/json");
//echo json encode
$m = new Mongo("mongodb://mongodb.addroid.com");
$db = $m->selectDB('publisher_crm');
$col = $db->publishers;

$results = $col->find();
$out_array = array();
		
foreach($results as $result){
	
	 array_push($out_array, array('_id' => $result['_id'], 
	 							  'publisher' => $result['publisher'], 
	 							  'status'=>$result['status'],
	 							  'pubcat'=>$result['pubcat'],
	 							  'pubinfo'=>$result['pubinfo'],
	 							  
	 							  ));
}
echo json_encode($out_array);

?>