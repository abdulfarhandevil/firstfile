<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model extends CI_Model
{
	function __construct() {
	parent::__construct();
}
// Count all record of table "contact_info" in database.
public function record_count()
{
	return $this->db->count_all("admin_table"); //number of rows
}

// Fetch data according to per_page limit.
public function fetch_data($id ,$limit ,$start) 
{	
	$this->db->where('id',$id);
	$query = $this->db->get('admin_table');
	$data = $query->row_array();
	$role_id = $data['role_id'];

	if ($role_id == "1") 
	{
		//$this->db->select('id,username,email,mobile_no,hobbies,profile_pic');
		$this->db->where('role_id','0');
		$this->db->limit($limit, $start);
		$query = $this->db->get("admin_table");
		return $query->result_array();
	}
	else
	{
		$this->db->where('id',$id);
		$query = $this->db->get('admin_table');
		return $query->result_array();
	}
}
}
?>