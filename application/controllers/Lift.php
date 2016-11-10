<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Lift extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lift_model');
    } 

    /*
     * Listing of lm_lift
     */
    function index()
    {
        $data['lm_lift'] = $this->Lift_model->get_all_lm_lift();

        $this->load->view('lift/index',$data);
    }

    /*
     * Adding a new lm_lift
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('lid','Lid','required');
		$this->form_validation->set_rules('station','Station','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('vin','Vin','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('no96333','No96333','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'lid' => $this->input->post('lid'),
				'station' => $this->input->post('station'),
				'substation' => $this->input->post('substation'),
				'type' => $this->input->post('type'),
				'vin' => $this->input->post('vin'),
				'code' => $this->input->post('code'),
				'location' => $this->input->post('location'),
				'model' => $this->input->post('model'),
				'orig_no' => $this->input->post('orig_no'),
				'change_no' => $this->input->post('change_no'),
				'production_date' => $this->input->post('production_date'),
				'manufacturer' => $this->input->post('manufacturer'),
				'param' => $this->input->post('param'),
				'last_check' => $this->input->post('last_check'),
				'next_check' => $this->input->post('next_check'),
				'distribution' => $this->input->post('distribution'),
				'no96333' => $this->input->post('no96333'),
            );
            
            $lm_lift_id = $this->Lift_model->add_lm_lift($params);
            redirect('lift/index');
        }
        else
        {
            $this->load->view('lift/add');
        }
    }  

    /*
     * Editing a lm_lift
     */
    function edit($id)
    {   
        // check if the lm_lift exists before trying to edit it
        $lm_lift = $this->Lift_model->get_lm_lift($id);
        
        if(isset($lm_lift['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('lid','Lid','required');
			$this->form_validation->set_rules('station','Station','required');
			$this->form_validation->set_rules('type','Type','required');
			$this->form_validation->set_rules('vin','Vin','required');
			$this->form_validation->set_rules('location','Location','required');
			$this->form_validation->set_rules('no96333','No96333','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'lid' => $this->input->post('lid'),
					'station' => $this->input->post('station'),
					'substation' => $this->input->post('substation'),
					'type' => $this->input->post('type'),
					'vin' => $this->input->post('vin'),
					'code' => $this->input->post('code'),
					'location' => $this->input->post('location'),
					'model' => $this->input->post('model'),
					'orig_no' => $this->input->post('orig_no'),
					'change_no' => $this->input->post('change_no'),
					'production_date' => $this->input->post('production_date'),
					'manufacturer' => $this->input->post('manufacturer'),
					'param' => $this->input->post('param'),
					'last_check' => $this->input->post('last_check'),
					'next_check' => $this->input->post('next_check'),
					'distribution' => $this->input->post('distribution'),
					'no96333' => $this->input->post('no96333'),
                );

                $this->Lift_model->update_lm_lift($id,$params);            
                redirect('lift/index');
            }
            else
            {   
                $data['lm_lift'] = $this->Lift_model->get_lm_lift($id);
    
                $this->load->view('lift/edit',$data);
            }
        }
        else
            show_error('The lm_lift you are trying to edit does not exist.');
    } 

    /*
     * Deleting lm_lift
     */
    function remove($id)
    {
        $lm_lift = $this->Lift_model->get_lm_lift($id);

        // check if the lm_lift exists before trying to delete it
        if(isset($lm_lift['id']))
        {
            $this->Lift_model->delete_lm_lift($id);
            redirect('lift/index');
        }
        else
            show_error('The lm_lift you are trying to delete does not exist.');
    }
    
}
