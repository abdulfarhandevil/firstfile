<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('User_model', 'Login_model','pagination_model'));
    if(!$this->session->userdata('userId')){
    redirect('Login_Controller/login');
    }
  }
  public function index()
  {
    redirect('Admin_Controller/myview');
  }
  public function Update_data($id)
  {
    $this->form_validation->set_rules('fname', 'First Name', 'required|alpha|min_length[4]');
    $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha|min_length[4]');
    $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');

    $this->form_validation->set_rules('mobile_no', 'Mobile Number', 'required|numeric|min_length[10]');

    //$this->form_validation->set_rules('profile', 'Profile Picture','required');

    $this->form_validation->set_rules('date_of_birth', 'DOB', 'required');

    $this->form_validation->set_rules('gender', 'Gender', 'required');

    $this->form_validation->set_rules('hobbies[]', 'Hobbies', 'required');
 
    if($this->form_validation->run() == FALSE) {
      redirect('Admin_Controller/myview/');
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
        $file = $this->input->post('old_profile');
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
      $data = $this->Login_model->update($values,$id);
      redirect('Admin_Controller/myview/');
    }
  }

  /*displaying user information*/
  public function myview()
  {
    $id = $this->session->userdata('userId');
    $config = array();
    $config["base_url"] = site_url('Admin_Controller/myview');
    $config["total_rows"] = $this->pagination_model->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    //specifies the URL segment that contains the value that will be used to skip records
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
    $data["results"] = $this->pagination_model->fetch_data($id ,$config["per_page"], $page);
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('data_table',$data);
    $this->load->view('footer');
  }
  
  public function dashboard()
  {
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('dashboard');
    $this->load->view('footer');
  }

  /*updating user information*/
  public function update($id)
  {
    $result['data'] = $this->Login_model->users($id);
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('Update',$result);
    $this->load->view('footer');
  }

  public function delete($id)
  {
    if(empty($this->session->userdata('userId'))){
      redirect('Admin_Controller/login');
    }
    else{
      $result = $this->User_model->delete($id);
      redirect('Admin_Controller/myview');
    }
  }

  public function logout()
  {
  $UserId = $this->session->userdata('userId');
  //echo $UserId; die;
  $this->session->unset_userdata($UserId);
  $this->session->sess_destroy();
  $this->session->set_flashdata('logout','Logout Successfully');
  redirect('Login_Controller/login');
  }
}
?>