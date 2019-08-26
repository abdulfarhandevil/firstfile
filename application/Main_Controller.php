<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Main_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    if(!$this->session->userdata('userId')){
    redirect('Login_Controller/login');
    }
  }

  public function index()
  {  //echo "test"; die;
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('dashboard');
 	$this->load->view('footer'); 
  }

  public function dashboard_2()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('dashboard_2');
 	$this->load->view('footer');
  }

  public function view_mail()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('view_mail');
 	$this->load->view('footer');
  }

  public function google_map()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('google_map');
 	$this->load->view('footer');
  }

  public function profile()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('profile');
 	$this->load->view('footer');
  }

  public function chart()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('chart');
 	$this->load->view('footer');
  }

  public function data_table()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('data_table');
 	$this->load->view('footer');
  }

  public function form_element()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('form_element');
 	$this->load->view('footer');
  }

  public function notification()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('notification');
 	$this->load->view('footer');
  }

  public function login()
  {  
  	$this->load->view('left_widget');
 	$this->load->view('header');
 	$this->load->view('page');
 	$this->load->view('footer');
  }

}