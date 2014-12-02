<?php
header("Content-type: application/json");
$out = array();

require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

if($_POST['email']) {
	$email = $_POST['email'];
	
	$api = new MCAPI($apikey);		
	
	$retval = $api->listSubscribe($listId, $email);
	if ($api->errorCode){
		$msg = "Unable to load listSubscribe()!\n";
		$msg .= "\tCode=".$api->errorCode."\n";
		$msg .= "\tMsg=".$api->errorMessage."\n";
		
		$out['error'] = true;
		$out['error_msg'] = $msg;
	} else {
		$out['error'] = false;
		$out['ret'] = $retval;
	}

}else {
	$out['error'] = true;
	$out['error_msg'] = "There was a problem getting your email, please try again";
}

echo json_encode($out);

?>

