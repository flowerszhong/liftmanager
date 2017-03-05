<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Report_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_reports($get,$limit,$page=0)
    {
    	$this->build_fields( $get );
    }

    public function build_fields($fields)
    {
    	$this->db->select("$this->table.*,$this->agent_table.shortname customer_com");
    	$this->db->from($this->table);
    	$this->db->join($this->agent_table,"$this->table.customer_com_id=$this->agent_table.id");
    	$this->db->where("$this->agent_table.available",1);

    	if(isset($filter['starttime'])){
    	    $starttime = strtotime($filter['starttime']);
    	    $starttime = date('Y-m-d H:i:s',$starttime);
    	    $this->db->where("$this->table.starttime >=",$starttime);
    	}

    	if(!empty($filter['company'])){
    	    $customer_com_id = $filter['company'];
    	    $this->db->where("$this->agent_table.id",$customer_com_id);
    	}

    	if(!empty($filter['state'])){
    	    $state = $filter['state'];
    	    $this->db->where("$this->table.state",$state);
    	}
    }

}