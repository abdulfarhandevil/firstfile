<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Country_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('Country_model'));
    if(!$this->session->userdata('userId')){
    redirect('Login_Controller/login');
    }
  }

  public function index()
  {
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('country');
    $this->load->view('footer');
  }
  public function all_countries()
  {
    $id = $this->session->userdata('userId');
    $config = array();
    $config["base_url"] = site_url('Country_Controller/all_countries');
    $config["total_rows"] = $this->Country_model->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    //specifies the URL segment that contains the value that will be used to skip records
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
    $data["results"] = $this->Country_model->get_countries($config["per_page"], $page);
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('country_table',$data);
    $this->load->view('footer');
  }

  public function add_country()
  {
    $this->form_validation->set_rules('Name', 'Country-Name', 'required');

    $this->form_validation->set_rules('Code', 'Country-Code', 'required|numeric|max_length[33]');

    if($this->form_validation->run() == FALSE) {
      $this->load->view('left_widget');
      $this->load->view('header');
      $this->load->view('country');
      $this->load->view('footer');
    } 
    else
    {
      $Country_Name = $this->input->post('Name');
      $Country_Code = $this->input->post('Code');
      $data = array('Country_Name' => $Country_Name ,'Country_Code' => $Country_Code);

      $result = $this->Country_model->add_countries($data);
      if ($result == true) {
        $this->session->set_flashdata('success_message','Country added successfully');
        redirect('Country_Controller/all_countries');
      }
      else
      {
        redirect('Country_Controller/index');
      }
    }
  }

  public function update_country($id)
  {
    $result['data'] = $this->Country_model->get($id);
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('Update_country',$result);
    $this->load->view('footer');
  }
  
  public function edit_country($id)
  { 
    $this->form_validation->set_rules('Name', 'Country Name', 'required');
    $this->form_validation->set_rules('Code', 'Country Code', 'required|numeric|max_length[33]');
    if($this->form_validation->run() == FALSE) { 
      echo "validat false"; die;
      redirect('Country_Controller/all_countries');
    } 
    else
    {
      $Name = $this->input->post('Name');
      $Code = $this->input->post('Code');

      $data = array('Country_Name' => $Name ,'Country_Code' => $Code);

      $result = $this->Country_model->update($data,$id);
      if ($result == true) {
        $this->session->set_flashdata('success_message','Country updated successfully');
        redirect('Country_Controller/all_countries');
      }
      else
      {
        redirect('Country_Controller/index');
      }
    }
  }

  public function delete_country($id)
  {
    $result = $this->Country_model->delete($id);
    $this->session->set_flashdata('success_message','country deleted successfully');
    redirect('Country_Controller/all_countries');
  }

}