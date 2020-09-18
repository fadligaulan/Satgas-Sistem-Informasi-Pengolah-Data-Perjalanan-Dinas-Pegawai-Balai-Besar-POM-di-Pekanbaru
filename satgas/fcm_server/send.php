<?php 

function send_notification ($tokens, $message)
{
	$url = 'https://fcm.googleapis.com/fcm/send';

	$msg = array
	(
		'body' 	=> "$message",
		'title'		=> "PUSH NOTIFICATION",
		'sound'		=> 'default'

		);
	$fields = array
	(
		'registration_ids' 	=> $tokens,
		'notification'			=> $msg
		);


	$headers = array(
		'Authorization:key = AAAArpYh0TU:APA91bF3G8mzrzrPlOQiRsvYUYQPl5Y2wuA-9oLXWX9AAdLAmQ-jld6ihd2zeSDZo6Sqh5n8wZbH8m-R4BO1lq5JKQDlG3uYMa0Cr8zyIqYZYyDG-A7GI3obzJ7qyyY6vwbQW9QiTVRh',
		'Content-Type: application/json'
		);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
	$result = curl_exec($ch);           
	if ($result === FALSE) {
		die('Curl failed: ' . curl_error($ch));
	}
	curl_close($ch);
	return $result;
}

//Checking post request 
if($_SERVER['REQUEST_METHOD']=='POST'){
	//Geting email and message from the request 
	$tokens[] = $_POST['token'];
	$message = $_POST['message'];
	$message_status = send_notification($tokens, $message);
	$result = json_decode($message_status);
	
	if($result->success){
		header('Location: sendNotification.php?success');
	}else{
		echo "<pre>";print_r($result);die; 
	}
}else{
	header('Location: sendNotification.php');
}


?>
