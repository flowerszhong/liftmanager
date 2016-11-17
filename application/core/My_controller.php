<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Station_model');
        $this->checkLogin();
        $this->config->load('site_settings',TRUE);
        date_default_timezone_set('Asia/Chongqing');
    }

    public function checkPermission()
    {
        if($this->admin_power<10){
            redirect('lift/index','refresh');
        }
    }

    public function checkLogin()
    {
        if(!$this->session->userdata('admin')){
            redirect('login/index','refresh');
        }else{
            $session_data = $this->session->userdata('admin');
            $this->admin_id = $session_data['id'];
            $this->admin_name = $session_data['name'];
            $this->display_name = $session_data['displayname'];
            $this->admin_power = $session_data['power'];
            $this->admin_station = $session_data['station'];
        }
    }

    public function isSuperAdmin()
    {
        if($this->admin_power>10){
            return true;
        }else{
            return false;
        }
    }

    

}

/* End of file My_controller.php */
/* Location: ./application/controllers/My_controller.php */

 ?>