<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends MY_Controller {
	public $table = 'tbl_mail';
	public $page  = 'Mail';
	public function __construct() {
		parent::__construct();
        if(! $this->is_logged_in()){
          redirect('/login');
        }
        
        $this->load->model('General_model');
        $this->load->model('Email_model');
	}
	public function index()
	{
		$template['body'] = 'Mail/list';
		$template['script'] = 'Mail/script';
		$this->load->view('template', $template);
	}
	public function add(){
		$this->form_validation->set_rules('e_username', 'Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Mail/add';
			$template['script'] = 'Mail/script';
			$this->load->view('template', $template);
		}
		else {
			$email_id = $this->input->post('email_id');
			$data = array(
						'mail_title' => $this->input->post('e_title'),
						'mail_username' => $this->input->post('e_username'),
						'mail_password' => $this->input->post('e_password'),
						'mail_host' => $this->input->post('e_host'),
						'mail_port' => $this->input->post('e_port'),
						'mail_recieve' => $this->input->post('e_recieve'),
						);
				if($email_id){
                     $result = $this->General_model->update($this->table,$data,'mail_id',$email_id);
                     $response_text = ' updated successfully';
                }
				else{
                     $result = $this->General_model->add($this->table,$data);
                     $response_text = ' added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/Email/', 'refresh');
		}
	}

	public function get(){
    	$param['draw'] = (isset($_REQUEST['draw']))?$_REQUEST['draw']:'';
        $param['length'] =(isset($_REQUEST['length']))?$_REQUEST['length']:'10'; 
        $param['start'] = (isset($_REQUEST['start']))?$_REQUEST['start']:'0';
        $param['order'] = (isset($_REQUEST['order'][0]['column']))?$_REQUEST['order'][0]['column']:'';
        $param['dir'] = (isset($_REQUEST['order'][0]['dir']))?$_REQUEST['order'][0]['dir']:'';
        $param['searchValue'] =(isset($_REQUEST['search']['value']))?$_REQUEST['search']['value']:'';
        
    	$data = $this->Email_model->getEMailTable($param);
    	$json_data = json_encode($data);
    	echo $json_data;
    }
	public function delete(){
        $mail_id = $this->input->post('mail_id');
        $updateData = array('contact_status' => 0);
        $data = $this->General_model->update($this->table,$updateData,'mail_id',$mail_id);
        if($data) {
            $response['text'] = 'Deleted successfully';
            $response['type'] = 'success';
        }
        else{
            $response['text'] = 'Something went wrong';
            $response['type'] = 'error';
        }
        $response['layout'] = 'topRight';
        $data_json = json_encode($response);
        echo $data_json;
		//redirect('/Contact/', 'refresh');
    }
	public function edit($mail_id){
		$template['body'] = 'Mail/add';
		$template['script'] = 'Mail/script';
		$template['records'] = $this->General_model->get_row($this->table,'mail_id',$mail_id);
    	$this->load->view('template', $template);
	}
}