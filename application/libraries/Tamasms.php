<?php

/**
 * Author : Kusmanto Pratama (Tama)
 */

//library CURL is activated by config/autoload.php
class Tamasms
{
	protected $ip;
	protected $CI;
	function __construct()
	{
		$this->CI = &get_instance();

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