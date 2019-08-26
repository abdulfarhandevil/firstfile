<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class State_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('State_model','Country_model'));
    if(!$this->session->userdata('userId')){
    redirect('Login_Controller/login');
    }
  }

  public function index()
  {
    $result = $this->State_model->get_all_country();
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('state',$result);
    $this->load->view('footer');
  }
  public function all_states()
  {
    $id = $this->session->userdata('userId');
    $config = array();
    $config["base_url"] = site_url('State_Controller/all_states');
    $config["total_rows"] = $this->State_model->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    //specifies the URL segment that contains the value that will be used to skip records
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
    $data["results"] = $this->State_model->get_states($config["per_page"], $page);
    //$data["country"] = $this->State_model->get_all_country();
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('state_table',$data);
    $this->load->view('footer');
  }

  public function add_state()
  {
    $this->form_validation->set_rules('Name', 'State-Name', 'required');

    $this->form_validation->set_rules('Code', 'Country-Name', 'required|min_length[1]');

    if($this->form_validation->run() == FALSE) {
      $this->load->view('left_widget');
      $this->load->view('header');
      $this->load->view('state');
      $this->load->view('footer');
    } 
    else
    {
      $State_Name = $this->input->post('Name');
      $Country_Code = $this->input->post('Code');
      $data = array('State_Name' => $State_Name ,'Country_id' => $Country_Code);

      $result = $this->State_model->add_states($data);
      if ($result == true) {
        $this->session->set_flashdata('success_message','State Added successfully');
        redirect('State_Controller/all_states');
      }
      else
      {
        redirect('State_Controller/index');
      }
    }
  }

  public function update_state($id)
  {
    $result['data'] = $this->State_model->get($id);
    $result['results'] = $this->State_model->get_all_country();
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('Update_state',$result);
    $this->load->view('footer');
  }
  
  public function edit_state($id)
  { 
    $this->form_validation->set_rules('Name', 'State Name', 'required');
    $this->form_validation->set_rules('Code', 'Country Name', 'required|min_length[1]');
    if($this->form_validation->run() == FALSE) { 
      $result['data'] = $this->State_model->get($id);
      $result['results'] = $this->State_model->get_all_country();
      $this->load->view('left_widget');
      $this->load->view('header');
      $this->load->view('Update_state',$result);
      $this->load->view('footer');
    } 
    else
    {
      $Name = $this->input->post('Name');
      $Code = $this->input->post('Code');

      $data = array('State_Name' => $Name ,'Country_id' => $Code);

      $result = $this->State_model->update($data,$id);
      if ($result == true) {
        $this->session->set_flashdata('success_message','State updated successfully');
        redirect('State_Controller/all_states');
      }
      else
      {
        redirect('State_Controller/index');
      }
    }
  }
  public function delete_state($id)
  {
    $result = $this->State_model->delete($id);
    $this->session->set_flashdata('success_message','State deleted successfully');
    redirect('State_Controller/all_states');
  }
}