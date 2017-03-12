<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
        $this->load->model('Escalator_model');
        $this->load->model('Elevator_model');
    } 


    public function index($value='')
    {
    	$get = $this->input->get();
    	$base_url = site_url('report/index');
    	$config = $this->config_pagination($base_url,$get);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    	$data['reports'] = $this->Report_model->get_reports($get,$config['per_page'],$page);
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
        $config["per_page"] = PER_PAGE;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        return $config;
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->upload_config();

        $this->form_validation->set_rules('lid','电梯编号','required');

        $escalators = $this->Escalator_model->get_all_escalator();
        $elevators = $this->Elevator_model->get_all_elevator();
        $data = array('escalators'=>$escalators,'elevators'=>$elevators);
        if($this->form_validation->run()){ 
            $lid = $this->input->post('lid');
            if (!$this->upload->do_upload('doc')){
                $data['errors'] = $this->upload->display_errors();
            }else{
                $doc = $this->upload->data();
                $doc_name = $doc['file_name'];
                $insert_id = $this->Report_model->insert_report($lid,$doc_name);
                if($insert_id){
                    redirect('report/index');
                }
            }
        }

    	$this->load->view('report/add',$data);
    }


    public function upload_config()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 2048;
        $config['encrypt_name'] = True;

        $this->load->library('upload', $config);
    }

    function del($id)
    {
        $report = $this->Report_model->get_report($id);

        // check if the elevator exists before trying to delete it
        if(isset($report['id']))
        {
            $this->Report_model->delete_report($id);
            redirect('report/index');
        }
        else
            show_error('该报告不存在.');
    }


}
 ?>