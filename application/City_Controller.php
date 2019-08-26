<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class City_Controller extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session', 'form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('City_model','Country_model','State_model'));
    if(!$this->session->userdata('userId')){
    redirect('Login_Controller/login');
    }
  }

  public function index()
  {
    $data['result'] = $this->State_model->get_all_country();
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('city',$data);
    $this->load->view('footer');
  }

  public function add_city()
  {
    $this->form_validation->set_rules('City_Name', 'City-Name', 'required');

    $this->form_validation->set_rules('State_id', 'State-Name', 'required');

    $this->form_validation->set_rules('Country_id', 'Country-Name', 'required');

    if($this->form_validation->run() == FALSE) {
      $data['result'] = $this->State_model->get_all_country();
      $this->load->view('left_widget');
      $this->load->view('header');
      $this->load->view('city',$data);
      $this->load->view('footer');
    } 
    else
    {
      $City_Name = $this->input->post('City_Name');
      $State_id = $this->input->post('State_id');
      $Country_id = $this->input->post('Country_id');
      $data = array('City_Name' => $City_Name ,'State_id' => $State_id,'Country_id' => $Country_id);

      $result = $this->City_model->add_cities($data);
      if ($result == true) {
        $this->session->set_flashdata('success_message','city added successfully');
        redirect('City_Controller/all_cities');
      }
      else
      {
        redirect('City_Controller/index');
      }
    }
  }

  public function all_cities()
  {
    $id = $this->session->userdata('userId');
    $config = array();
    $config["base_url"] = site_url('City_Controller/all_cities');
    $config["total_rows"] = $this->City_model->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    //specifies the URL segment that contains the value that will be used to skip records
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
    $data["results"] = $this->City_model->get_cities($config["per_page"], $page);
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('city_table',$data);
    $this->load->view('footer');
  }

  public function update_city($id)
  {
    $value['idd'] = $id;
    $value['data'] = $this->City_model->get($id);
    $value['result'] = $this->State_model->get_all_country();
    $this->load->view('left_widget');
    $this->load->view('header');
    $this->load->view('Update_City',$value);
    $this->load->view('footer');
  }
  
  public function edit_city($id)
  { 
    $this->form_validation->set_rules('City_Name', 'City-Name', 'required');

    $this->form_validation->set_rules('State_id', 'State-Name', 'required');

    $this->form_validation->set_rules('Country_id', 'Country-Name', 'required');

    if($this->form_validation->run() == FALSE) {
      $value['idd'] = $id; 
      $value['data'] = $this->City_model->get($id);
      $value['result'] = $this->State_model->get_all_country();
      $this->load->view('left_widget');
      $this->load->view('header');
      $this->load->view('Update_City',$value);
      $this->load->view('footer');
    } 
    else
    {
      $City_Name = $this->input->post('City_Name');
      $State_id = $this->input->post('State_id');
      $Country_id = $this->input->post('Country_id');

      $data = array('City_Name' => $City_Name ,'State_id' => $State_id,'Country_id' => $Country_id);

      $result = $this->City_model->update($data,$id);
      if ($result == true) {
        $this->session->set_flashdata('success_message','city updated successfully');
        redirect('City_Controller/all_cities');
      }
      else
      {
        redirect('City_Controller/index');
      }
    }
  }

  public function delete_city($id)
  {
    $result = $this->City_model->delete($id);
    if ($result == true) {
      $this->session->set_flashdata('success_message','city deleted successfully');
      redirect('City_Controller/all_cities');
    }
    else
    {
      redirect('City_Controller/all_cities');
    }
  }

  public function get_states()
  {
    $id = $this->input->post('id');
    $data = $this->City_model->get_states($id);
    foreach ($data as $key => $value) {
      echo "<option value=".$value['id'].">".$value['State_Name']."</option>";
    }
  }
}