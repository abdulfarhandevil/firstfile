<?php 
class Country_model extends CI_Model 
{
    public function add_countries($data)
    {
        $query = $this->db->insert('country', $data);
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
        $query = $this->db->delete('country');
        if ($query == 1) 
        {
            return true;
        }
        else
        {
            return true;
        }
    }
    public function get_countries($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("country");
        return $query->result_array(); 
    }
    public function record_count()
    {
        return $this->db->count_all("country"); //number of rows
    }
    public function get($id)
    {       
        $this->db->where('id',$id);
        $query = $this->db->get('country');
        return $query->row_array();     
    }
    public function update($data,$id)
    {       
        $this->db->where('id',$id);
        $query = $this->db->update('country', $data);
        return true;     
    }
}
?>