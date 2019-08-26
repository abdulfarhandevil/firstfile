<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model 
{
  public function get_user($values)
  {
    $query = $this->db->insert('admin_table', $values);
    return $this->db->insert_id();
  }

  public function delete($id)
  {
    $query = $this->db->where('id', $id)
	                    ->delete('admin_table');
    return true;
  }
}
?>