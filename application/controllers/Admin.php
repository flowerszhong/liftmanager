<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Admin extends CI_Controller
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
        $data['lm_admin'] = $this->Admin_model->get_all_lm_admin();

        $this->load->view('admin/index',$data);
    }

    /*
     * Adding a new lm_admin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','alpha_numeric|max_length[16]|required');
		$this->form_validation->set_rules('displayname','Displayname','required|max_length[10]');
		$this->form_validation->set_rules('pwd','Pwd','required');
		$this->form_validation->set_rules('salt1','Salt1','required|max_length[12]');
		$this->form_validation->set_rules('salt2','Salt2','required');
		$this->form_validation->set_rules('station','Station','required');
		$this->form_validation->set_rules('power','Power','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'displayname' => $this->input->post('displayname'),
				'pwd' => $this->input->post('pwd'),
				'salt1' => $this->input->post('salt1'),
				'salt2' => $this->input->post('salt2'),
				'station' => $this->input->post('station'),
				'power' => $this->input->post('power'),
            );
            
            $lm_admin_id = $this->Admin_model->add_lm_admin($params);
            redirect('admin/index');
        }
        else
        {
            $this->load->view('admin/add');
        }
    }  

    /*
     * Editing a lm_admin
     */
    function edit($id)
    {   
        // check if the lm_admin exists before trying to edit it
        $lm_admin = $this->Admin_model->get_lm_admin($id);
        
        if(isset($lm_admin['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','alpha_numeric|max_length[16]|required');
			$this->form_validation->set_rules('displayname','Displayname','required|max_length[10]');
			$this->form_validation->set_rules('pwd','Pwd','required');
			$this->form_validation->set_rules('salt1','Salt1','required|max_length[12]');
			$this->form_validation->set_rules('salt2','Salt2','required');
			$this->form_validation->set_rules('station','Station','required');
			$this->form_validation->set_rules('power','Power','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'displayname' => $this->input->post('displayname'),
					'pwd' => $this->input->post('pwd'),
					'salt1' => $this->input->post('salt1'),
					'salt2' => $this->input->post('salt2'),
					'station' => $this->input->post('station'),
					'power' => $this->input->post('power'),
                );

                $this->Admin_model->update_lm_admin($id,$params);            
                redirect('admin/index');
            }
            else
            {   
                $data['lm_admin'] = $this->Admin_model->get_lm_admin($id);
    
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