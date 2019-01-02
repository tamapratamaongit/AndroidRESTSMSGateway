<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Tamasms');
	}
	
	public function index()
	{
		$this->load->view('smsform');
	}

	public function docs(){
		$this->load->view('documentation');
	}

	public function send(){
		$to = $this->input->post("to");
		$message = $this->input->post("message", true);
		$this->tamasms->setIP('192.168.137.49:8080');
		echo $this->tamasms->sendSMS($to, $message);

	}
}
