<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 function __construct()
	{
		parent::__construct();
		$this->load->model(array('usermodel'));
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
	}
	public function index()
	{
		$result['data'] = $this->usermodel->get_country();

		$this->load->view('city',$result);
	}
	public function get_states()
	{
		$id = $this->input->post('id');
		$data = $this->usermodel->get_states($id);
		foreach ($data as $key => $value) {
			echo "<option>".$value['name']."</option>";
		}
	}
}
