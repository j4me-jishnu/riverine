<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity extends MY_Controller {
	public function __construct() {
		parent::__construct();
        if(! $this->is_logged_in()){
          redirect('/login');
        }
        
        $this->load->model('General_model');
        $this->load->model('Activity_model');
	}

	public function viewActivity()
	{
		$template['body'] = 'Activity/list';
		$template['script'] = 'Activity/script';
		$this->load->view('template', $template);
	}

	public function addActivity(){
		$this->form_validation->set_rules('act_title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Activity/add';
			$template['script'] = 'Activity/script';
			$this->load->view('template', $template);
		}
		else {
			$act_id = $this->input->post('act_id');
			if(!empty($_FILES['act_img']['name'])){
                $config['upload_path'] = 'uploads/activity/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['act_img']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('act_img')){
                    $uploadData = $this->upload->data();
                    $act_images = $uploadData['file_name'];
                }else{
                    $act_images = '';
                }
			}else{
					if($act_id)
					{
						$act_images = $this->input->post('act_img1');
					}
					else{
						$act_images ='Not uploaded';
					}
				 }
			$data = array(
						'act_title' => $this->input->post('act_title'),
						'act_desc' => $this->input->post('act_desc'),
                        'act_pricing_info' => $this->input->post('act_pricing_info'),
						'act_img' => $act_images,

						);
				if($act_id){
                     $result = $this->General_model->update('tbl_activity',$data,'act_id',$act_id);
                     $response_text = 'Activity updated successfully';
                }
				else{
                     $result = $this->General_model->add('tbl_activity',$data);
                     $response_text = 'Activity added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/viewActivity/', 'refresh');
		}
    	}

	public function getActivity()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Activity_model->getActivityList($param);
		$json_data = json_encode($data);
		echo $json_data;
	}

	public function editActivity($act_id)
	{
		$template['records'] = $this->General_model->get_row('tbl_activity','act_id',$act_id);
		$template['body'] = 'Activity/add';
		$template['script'] = 'Activity/script';
		$this->load->view('template', $template);
	}

    
	public function deleteActivity(){
        $act_id = $this->input->post('act_id');
        $updateData = array('act_status' => 0);
        $data = $this->General_model->update('tbl_activity',$updateData,'act_id',$act_id);
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
    }
}