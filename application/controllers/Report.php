<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
    } 


    public function index($value='')
    {
    	$get = $this->input->get();
    	$base_url = site_url('report/index');
    	$config = $this->config_pagination($base_url,$get);
    	$data['reports'] = $this->Report_model->get_reports($get,$config['per_page'],$page=0);
    	$this->load->view('report/index',$data);
    }

    public function config_pagination($base_url,$get)
    {
        $this->load->library('pagination');
        $config = array();
        // $this->config->load('pagination');
        $config["base_url"] = $base_url;
        if (count($get) > 0) {
            $config['suffix'] = '?' . http_build_query($get, '', "&");
        }
        $config['first_url'] = $base_url . '?' . http_build_query($get, '', "&");
        $config["total_rows"] = $this->Report_model->record_count($get);
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        return $config;
    }
}
 ?>