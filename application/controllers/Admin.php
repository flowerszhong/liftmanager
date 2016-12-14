<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Admin extends MY_Controller
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
        $data['lm_admin'] = $this->Admin_model->get_all_admin();

        $this->load->view('admin/index',$data);
    }

    /*
     * Adding a new lm_admin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','alpha_dash|min_length[4]|max_length[16]|required');
        $this->form_validation->set_rules('displayname','Displayname','required|max_length[10]');
        $this->form_validation->set_rules('pwd','密码','required|max_length[16]');
		$this->form_validation->set_rules('station','Station','required');
		
		if($this->form_validation->run())     
        {   
            $post = $this->input->post();
            $salt1 = rand(1,9999);
            $salt2 = rand(1000,9999);
            $pwd = $post['pwd'];
            $pwd = sha1($salt2. $salt2 . $pwd);

            $params = array(
				'name' => $post['name'],
				'displayname' => $post['displayname'],
				'pwd' => $pwd,
				'salt1' => $salt1,
				'salt2' => $salt2,
				'station' => $post['station'],
				'power' => $post['grade'],
            );

            $lm_admin_id = $this->Admin_model->add_lm_admin($params);
            redirect('admin/index');
        }
        else
        {
            $data['stations'] = $this->Station_model->get_all_lm_station();
            $this->load->view('admin/add',$data);
        }
    }  

    /*
     * Editing a lm_admin
     */
    function edit($id)
    {   
        // check if the lm_admin exists before trying to edit it
        $lm_admin = $this->Admin_model->get_admin($id);
        
        if(isset($lm_admin['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','alpha_numeric|max_length[16]|required');
			$this->form_validation->set_rules('displayname','Displayname','required|max_length[10]');
			$this->form_validation->set_rules('pwd','Pwd','min_length[6]');
			$this->form_validation->set_rules('station','Station','required');
		
			if($this->form_validation->run())     
            {   
                $post = $this->input->post();
                $params = array(
					'name' => $post['name'],
					'displayname' => $post['displayname'],
					'station' => $this->input->post('station'),
					'power' => $this->input->post('grade'),
                );

                $pwd = $post['pwd'];
                $pwd = trim($pwd);
                if(!empty($pwd)){
                    $salt1 = rand(1,9999);
                    $salt2 = rand(1000,9999);
                    $pwd = sha1($salt2. $salt2 . $pwd);
                    $params['salt1'] = $salt1;
                    $params['salt2'] = $salt2;
                    $params['pwd'] = $pwd;
                }

                $this->Admin_model->update_lm_admin($id,$params);            
                redirect('admin/index');
            }
            else
            {   
                $data['lm_admin'] = $lm_admin;
                $data['stations'] = $this->Station_model->get_all_lm_station();
    
                $this->load->view('admin/edit',$data);
            }
        }
        else
            show_error('The lm_admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting lm_admin
     */
    function remove($id)
    {
        $lm_admin = $this->Admin_model->get_lm_admin($id);

        // check if the lm_admin exists before trying to delete it
        if(isset($lm_admin['id']))
        {
            $this->Admin_model->delete_lm_admin($id);
            redirect('admin/index');
        }
        else
            show_error('The lm_admin you are trying to delete does not exist.');
    }
    
}
