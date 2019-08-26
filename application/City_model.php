<?php 
class city_model extends CI_Model 
{
	public function get_all_country()
    {
        $query = $this->db->get("country");
        return $query->result_array(); 
    }

    public function get_states($id)
    {
        $this->db->where('country_id', $id);
        $query = $this->db->get("state");
        return $query->result_array(); 
    }

    public function add_cities($data)
    {
        $query = $this->db->insert('city', $data);
        if ($query == 1) 
        {
            return true;
        }
        else
        {
            return false;
        }   
    }

    public function get_cities($limit, $start)
    {
        $this->db->select('city.*, country.Country_Name,state.State_Name');
        $this->db->from('city');
        $this->db->join('state', 'city.State_id = state.id');
        $this->db->join('country', 'city.Country_id = country.id');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function record_count()
    {
        return $this->db->count_all("city"); //number of rows
    }

    public function get($id)
    {
        $this->db->select('city.*,state.State_Name,state.id');
        $this->db->from('city');
        $this->db->join('state', 'city.State_id = state.id');
        $this->db->where('city.id',$id);
        $query = $this->db->get();
        return $query->row_array();     
    }
    
    public function update($data,$id)
    {       
        $this->db->where('id',$id);
        $query = $this->db->update('city', $data);
        //echo $this->db->last_query(); die;
        return true;     
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('city');
        if ($query == 1) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>