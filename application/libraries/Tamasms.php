<?php

/**
 * Author : Kusmanto Pratama (Tama)
 */


class Tamasms
{
	protected $ip;
	function __construct()
	{

	}

	function setIp($ip_addr){
		$this->ip = $ip_addr;
	}

	function sendSMS($to, $message){
		$post = [
		    'phone' => $to,
		    'message' => $message
		];
		$url = 'http://'.$this->ip.'/v1/sms/';
		//create curl resource 
       $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		       

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);   
        return "output: ".$output;
	}

}
