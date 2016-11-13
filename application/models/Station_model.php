<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Station_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lm_station by id
     */
    function get_lm_station($id)
    {
        return $this->db->get_where('lm_station',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all lm_station
     */
    function get_all_lm_station()
    {
        return $this->db->get('lm_station')->result_array();
    }

    function get_all_lm_station2()
    {
        $sql = "select a.*,b.name as main_station from lm_station a left join lm_station b on a.parent = b.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    /*
     * function to add new lm_station
     */
    function add_lm_station($params)
    {
        $this->db->insert('lm_station',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update lm_station
     */
    function update_lm_station($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('lm_station',$params);
        if($response)
        {
            return "lm_station updated successfully";
        }
        else
        {
            return "Error occuring while updating lm_station";
        }
    }
    
    /*
     * function to delete lm_station
     */
    function delete_lm_station($id)
    {
        $response = $this->db->delete('lm_station',array('id'=>$id));
        if($response)
        {
            return "lm_station deleted successfully";
        }
        else
        {
            return "Error occuring while deleting lm_station";
        }
    }


    function get_station_by_grade($grade)
    {
        return $this->db->get_where('lm_station',array('grade'=>$grade))->result_array();
    }
}
