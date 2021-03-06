<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Elevator_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get elevator by id
     */
    function get_elevator($id)
    {
        return $this->db->get_where('elevator',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all elevator
     */
    function get_all_elevator()
    {
        return $this->db->get('elevator')->result_array();
    }
    
    /*
     * function to add new elevator
     */
    function add_elevator($params)
    {
        $this->db->insert('elevator',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update elevator
     */
    function update_elevator($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('elevator',$params);
        if($response)
        {
            return "elevator updated successfully";
        }
        else
        {
            return "Error occuring while updating elevator";
        }
    }
    
    /*
     * function to delete elevator
     */
    function delete_elevator($id)
    {
        $response = $this->db->delete('elevator',array('id'=>$id));
        if($response)
        {
            return "elevator deleted successfully";
        }
        else
        {
            return "Error occuring while deleting elevator";
        }
    }

    public function record_query($search,$limit,$page=0)
    {
       
        $this->record_field($search);
        $this->db->limit($limit,$page);
        $query = $this->db->get('elevator');
        return $query->result_array();
    }

    public function record_count($search)
    {
        $this->record_field($search);
        $query = $this->db->get('elevator');
        return $query->num_rows();
    }


    public function record_field($fields)
    {
        if(!empty($fields['lid'])){
            $this->db->where('lid',$fields['lid']);
        }else{
            foreach ($fields as $key => $s) {
                if(!empty($s)){
                    $this->db->or_like($key,$s);
                }
            }
        }
    }
}
