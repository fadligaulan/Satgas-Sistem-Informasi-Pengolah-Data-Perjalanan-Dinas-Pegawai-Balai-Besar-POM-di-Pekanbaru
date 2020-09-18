<?php

    function send_notif($token = array(), $title = '', $message = '', $android_activity = '') {
        if (!is_array($token)) return "token must in array";
        
    	$url = 'https://fcm.googleapis.com/fcm/send';
    
    	$msg = array
    	(
          'body'               => $message,
          'title'              => $title,
          'sound'              => 'default',
          'action'             => "activity",
          'action_destination' => $android_activity
    	);
    	
    	$fields = array
    	(
    		'registration_ids' 	=> $token,
    		'notification'	    => $msg
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
    	return ($result);
    	
    }  
    
?>