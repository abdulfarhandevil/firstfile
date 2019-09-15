<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Controller extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->library(array('session','pagination'));
	    $this->load->helper('url');
	    $this->load->model('Authenticate');
	}
	public function index()
	{
		$this->load->view('date');
	}
	public function show_data($record=0)
	{
		if (!empty($this->input->post('date'))) {
			$date = $this->input->post('date');
			$this->session->set_userdata('date',$date);
			//echo $date;die();
		}
		else{			
			$date = $this->session->userdata('date');
		}
		$recordPerPage = 10;
		if($record != 0){
			$record = ($record-1) * $recordPerPage;
		}
		$config = array();
	    $config["base_url"] = site_url('Admin_Controller/show_data');
	    $config["total_rows"] = $this->Authenticate->record_count($date);
	    $config['use_page_numbers'] = TRUE;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
	    $this->pagination->initialize($config);
    	//$page = ($this->uri->segment(3)) ? ($this->uri->segment(3)-1) : 0;
		$result['empData'] = $this->Authenticate->get_users($recordPerPage, $record,$date);
		if ($config["total_rows"]>10) {
			$result['pagination'] = $this->pagination->create_links();
		}
		else
		{
			$result['pagination'] ='';	
		}
		if ($result['empData']=='') {
			$result['empData'] ='';
			echo json_encode($result);
		}
		else
		{
			echo json_encode($result);
		}
	}
}