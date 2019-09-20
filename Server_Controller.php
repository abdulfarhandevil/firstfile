<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees_List extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->library(array('session','pagination','email'));
	    $this->load->database();
        $this->load->helper('url','form');
	    $this->load->model('Data_model');
	    error_reporting(0);
	    ini_set('display_errors', 'Off');
	}

	public function index()
	{
		$this->load->view('user_list');
	}

	public function employee_data(){
		if($_POST && $_POST!=""){
           	$date = $this->input->post('date');
		    $new_date = date('Y-m-d',strtotime($date));
		    $data['userdata']  = $this->Data_model->get_users("'".$new_date."'");
		    $this->session->set_flashdata('date',$date);
		    $this->load->view('user_list',$data);
		}else
		{
			$date = date("Y-m-d");
			$data['userdata']  = $this->Data_model->get_users("'".$date."'");
			$this->session->set_flashdata('date',$date);
			$this->load->view('user_list',$data);
		}
	}

	public function send_mail()
	{ 
   		$from_email = $this->input->post('from');
   		$to_email = $this->input->post('to');
   		$To = explode(",",$to_email);
   		//$date = date('d.m.Y',strtotime("-1 days"));
   		$msg_body = $this->input->post('message');
   		$subject = $this->input->post('subject');
   		$count = count($To);
   		$count--;
   		$msg='';
		for ($i=0; $i < $count; $i++) { 
			$email  = $To[$i];
            $this->email->from($from_email,'Kaushal Pandey'); 
	        $this->email->to($email);
	        $this->email->reply_to('','');
	        $this->email->cc(
			array('Kaushal.InfoWind@gmail.com','vipinmaru285@gmail.com')
	        );
	        $this->email->bcc($email);
	        $this->email->subject($subject); 
	        $this->email->message($msg_body);
	        //$this->email->send();
	        $msg = 'sent';
   		}
   		echo $msg;
	} 
}