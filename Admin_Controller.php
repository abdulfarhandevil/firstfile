<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library(array('session','pagination'));
	    $this->load->helper('url');
	    $this->load->model('User_model');
	}
	public function index()
	{
		$this->load->view('date');
	}
	public function show_data()
	{
		if (!empty($this->session->userdata('date'))) {
			$date = $this->session->userdata('date');
			//echo $date;die();
		}
		else{
			$date = $this->input->post('date');
			$this->session->set_userdata('date',$date);
		}
		$config = array();
	    $config["base_url"] = site_url('Admin_Controller/show_data');
	    $config["total_rows"] = $this->User_model->record_count();
	    $config["per_page"] = 10;
	    $config["uri_segment"] = 3;
	    $this->pagination->initialize($config);

    	$page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
		$result = $this->User_model->get_users($config["per_page"], $page,$date);

		if ($result == false) {
			return "";
		}
		else
		{
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>".$value['id']."</td>";
				echo "<td>".$value['login']."</td>";
				echo "<td>".$value['firstname']."</td>";
				echo "<td>".$value['Date']."</td>";
				echo "<td>".$value['Tot_Hrs']."</td>";
				echo "</tr>";
			}
		}
	}
}
