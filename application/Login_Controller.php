<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('User_model', 'Login_model'));
    //echo $this->session->userdata('userId'); die;
    if($this->session->userdata('userId')){
    redirect('Admin_Controller/dashboard');
    }
  }
	public function index()
	{
	$this->load->view('Registration');
	}

  public function Register()
  {
    $this->form_validation->set_rules('fname', 'First Name', 'required|alpha|min_length[4]');
    $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha|min_length[4]');
    $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');

    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

    $this->form_validation->set_rules('mobile_no', 'Mobile Number', 'required|numeric|min_length[10]');

    //$this->form_validation->set_rules('profile', 'Profile Picture','required');

    $this->form_validation->set_rules('date_of_birth', 'DOB', 'required');

    $this->form_validation->set_rules('gender', 'Gender', 'required');

    $this->form_validation->set_rules('hobbies[]', 'Hobbies', 'required');
 
    if($this->form_validation->run() == FALSE) {
      $this->load->view('Registration');
    } 
    else
    {
      if(isset($_FILES['profile']['name']) && !empty($_FILES['profile']['name'])){
        $img = $_FILES['profile']['name'];
        $config['file_name'] = $img;
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $this->load->library('upload', $config);
        $file_upload =  $this->upload->do_upload('profile');
       $data = array('upload_file' => $this->upload->data());
       $file = $data['upload_file']['file_name'];
      }
      else{
        $file = '';
      }
      $fname = $this->input->post('fname');
      $lname = $this->input->post('lname');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $password = md5($password);
      $mobile_no = $this->input->post('mobile_no');
      $date_of_birth = $this->input->post('date_of_birth');
      $gender = $this->input->post('gender');
      $hobbies = $this->input->post('hobbies');
      $hobbies = implode(",",$hobbies);
      $msg = "Registered successfully";
      $this->session->set_flashdata('msg',$msg);

      $values = array('first_name' => $fname ,'last_name' => $lname ,'username' => $username ,'email' => $email ,'password' => $password ,'mobile_no' => $mobile_no ,'profile_pic' => $file ,'date_of_birth' => $date_of_birth ,'gender' => $gender ,'Hobbies' => $hobbies);

		$this->User_model->get_user($values);

		redirect('Login_Controller/login/');
    }
  }

	public function login()
	{   
	$this->load->view('login');
	}

	/*login process*/
  public function process()  
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
    if($this->form_validation->run() == false)
    {
      $this->load->view('login');
    }
    else
    {
      $email = $this->input->post('email');
      $pass = $this->input->post('password'); 
      $pass = md5($pass);   
      $result = $this->Login_model->login($email,$pass);
      if (empty($result))
      {
      $msg = "password or Email in not valid";
      $this->session->set_flashdata('login_error',$msg);
      redirect('Login_Controller/login');
      }
      else
      {
        $msg = "login success";
        $this->session->set_flashdata('message',$msg);
        $this->session->set_userdata('userId',$result[0]['id']);
        redirect('Admin_Controller/dashboard/');
      }
    }  
  }
}