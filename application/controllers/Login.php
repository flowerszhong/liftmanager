<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('admin_model');
        $this->config->load('site_settings',TRUE);
        date_default_timezone_set('Asia/Chongqing');
    }


    public function index(){
    	$this->form_validation->set_rules('name', '账号', 'trim|required|xss_clean|min_length[4]|max_length[20]');
    	$this->form_validation->set_rules('password', '密码', 'trim|required|xss_clean|min_length[6]|max_length[20]');

    	if($this->form_validation->run() == True){
            $name = $this->input->post('name');
    		$pwd = $this->input->post('password');
            $login_data = $this->admin_model->check_login($name,$pwd);
    	    if (!$login_data) {
                $view_data = array('error'=>'账号或密码不正确');
    	        $this->load->view('login',$view_data);
    	    }else{
                $this->session->set_userdata('admin',$login_data);
        	    redirect('lift/index','refresh');
    	    }
    	}else{
    		$this->load->view('login');
    	}
    }

    public function logout()
    {
        $this->session->unset_userdata('admin');
        redirect('login/index','refresh');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

 ?>