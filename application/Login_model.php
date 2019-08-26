<?php 
class Login_model extends CI_Model 
{
	public function login($user,$pass)
    {    	
		$this->db->where('email',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get('admin_table');
		return $query->result_array();     
    }
    public function users($id)
    {    	
		$this->db->where('id',$id);
		$query = $this->db->get('admin_table');
		return $query->row_array();     
    }
    public function update($values,$id)
    {    	
    	$this->db->where('id',$id);
    	$query = $this->db->update('admin_table', $values);
		return true;     
    }
}
?>