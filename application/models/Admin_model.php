<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lm_admin by id
     */
    function get_lm_admin($id)
    {
        return $this->db->get_where('lm_admin',array('id'=>$id))->row_array();
    }

    function get_admin($id)
    {
        $sql = "select a.*,b.grade,b.name as station_name from lm_admin a left join lm_station b on a.station = b.id where a.id = $id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    
    /*
     * Get all lm_admin
     */
    function get_all_lm_admin()
    {
        return $this->db->get('lm_admin')->result_array();
    }

    function get_all_admin()
    {
        $sql = "select a.*,b.name as station_name from lm_admin a left join lm_station b on a.station = b.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    /*
     * function to add new lm_admin
     */
    function add_lm_admin($params)
    {
        $this->db->insert('lm_admin',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update lm_admin
     */
    function update_lm_admin($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('lm_admin',$params);
        if($response)
        {
            return "lm_admin updated successfully";
        }
        else
        {
            return "Error occuring while updating lm_admin";
        }
    }
    
    /*
     * function to delete lm_admin
     */
    function delete_lm_admin($id)
    {
        $response = $this->db->delete('lm_admin',array('id'=>$id));
        if($response)
        {
            return "lm_admin deleted successfully";
        }
        else
        {
            return "Error occuring while deleting lm_admin";
        }
    }

    function check_login($name,$pwd)
    {
        $this->db->where('name',$name);
        $admins = $this->db->get('lm_admin')->result_array();
        foreach ($admins as $admin) {
            $p1 = $admin['pwd'];
            $salt2 = $admin['salt2'];
            $p2 = sha1($salt2 . $salt2 . $pwd);
            if($p1==$p2){
                return $admin;
            }
        }

        return FALSE;

    }
}
