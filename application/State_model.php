<?php 
class State_model extends CI_Model 
{
	public function get_all_country()
    {
        $query = $this->db->get("country");
        return $query->result_array(); 
    }
    
    public function add_states($data)
    {
        $query = $this->db->insert('state', $data);
        if ($query == 1) 
        {
            return true;
        }
        else
        {
            return true;
        }   
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('state');
        if ($query == 1) 
        {
            return true;
        }
        else
        {
            return true;
        }
    }

    public function get_states($limit, $start)
    {
    	$this->db->select('state.*, country.Country_Name');
        $this->db->from('state','country');
        $this->db->join('country', 'state.Country_id = country.id');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        //echo $this->db->last_query(); die;
        return $query->result_array(); 
    }

    public function record_count()
    {
        return $this->db->count_all("state"); //number of rows
    }

    public function get($id)
    {       
        $this->db->where('id',$id);
        $query = $this->db->get('state');
        return $query->row_array();     
    }

    public function update($data,$id)
    {       
        $this->db->where('id',$id);
        $query = $this->db->update('state', $data);
        return true;     
    }
}
?>