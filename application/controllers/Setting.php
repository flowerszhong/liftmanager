<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Setting extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 

    /*
     * Listing of lm_admin
     */
    function index()
    {
        // check if the lm_admin exists before trying to edit it
        $lm_admin = $this->Admin_model->get_admin($this->admin_id);
        
        if(isset($lm_admin['id']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name','账号','alpha_numeric|max_length[16]|required');
            $this->form_validation->set_rules('displayname','姓名','required|max_length[10]');
            $this->form_validation->set_rules('pwd','密码','min_length[6]');
        
            if($this->form_validation->run())     
            {   
                $post = $this->input->post();
                $params = array(
                    'name' => $post['name'],
                    'displayname' => $post['displayname'],
                );

                $pwd = $post['pwd'];

                if(!empty(trim($pwd))){
                    $salt1 = rand(1,9999);
                    $salt2 = rand(1000,9999);
                    $pwd = sha1($salt2. $salt2 . $pwd);
                    $params['salt1'] = $salt1;
                    $params['salt2'] = $salt2;
                    $params['pwd'] = $pwd;
                }

                $this->Admin_model->update_lm_admin($id,$params);            
                redirect('setting/index');
            }
            else
            {   
                $data['lm_admin'] = $lm_admin;
                $data['stations'] = $this->Station_model->get_all_lm_station();
    
                $this->load->view('setting/index',$data);
            }
        }
        else{
            show_error('The lm_admin you are trying to edit does not exist.');
        }
    } 

    
    
}