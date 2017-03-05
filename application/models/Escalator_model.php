<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Escalator_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get escalator by id
     */
    function get_escalator($id)
    {
        return $this->db->get_where('escalator',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all escalator
     */
    function get_all_escalator()
    {
        return $this->db->get('escalator')->result_array();
    }
    
    /*
     * function to add new escalator
     */
    function add_escalator($params)
    {
        $this->db->insert('escalator',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update escalator
     */
    function update_escalator($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('escalator',$params);
        if($response)
        {
            return "escalator updated successfully";
        }
        else
        {
            return "Error occuring while updating escalator";
        }
    }
    
    /*
     * function to delete escalator
     */
    function delete_escalator($id)
    {
        $response = $this->db->delete('escalator',array('id'=>$id));
        if($response)
        {
            return "escalator deleted successfully";
        }
        else
        {
            return "Error occuring while deleting escalator";
        }
    }


    public function record_query($search,$limit,$page=0)
    {
       
        $this->record_field($search);
        $this->db->limit($limit,$page);
        $query = $this->db->get('escalator');
        return $query->result_array();
    }

    public function record_count($search)
    {
        $this->record_field($search);
        $query = $this->db->get('escalator');
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
