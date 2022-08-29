<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nearby extends MY_Controller {
	public function __construct() {
		parent::__construct();
        if(! $this->is_logged_in()){
          redirect('/login');
        }
        
        $this->load->model('General_model');
        $this->load->model('Nearby_model');
	}

	public function viewNearby()
	{
		$template['body'] = 'Nearby/list';
		$template['script'] = 'Nearby/script';
		$this->load->view('template', $template);
	}

	public function addNearby(){
		$this->form_validation->set_rules('nearby_title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Nearby/add';
			$template['script'] = 'Nearby/script';
			$this->load->view('template', $template);
		}
		else {
			$nearby_id = $this->input->post('nearby_id');
			if(!empty($_FILES['nearby_img']['name'])){
                $config['upload_path'] = 'uploads/nearby/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['nearby_img']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('nearby_img')){
                    $uploadData = $this->upload->data();
                    $nearby_images = $uploadData['file_name'];
                }else{
                    $nearby_images = '';
                }
			}else{
					if($nearby_id)
					{
						$nearby_images = $this->input->post('nearby_img1');
					}
					else{
						$nearby_images ='Not uploaded';
					}
				 }
				 $nearby_display = $this->input->post('nearby_display');
				 if(!empty($nearby_display)){
					$display = 1;
				 }
				 else{
					$display = 0;
				 }
			$data = array(
						'nearby_title' => $this->input->post('nearby_title'),
						'nearby_desc' => $this->input->post('nearby_desc'),
						'nearby_display' => $display,
						'nearby_img' => $nearby_images,

						);
				if($nearby_id){
                     $result = $this->General_model->update('tbl_nearby',$data,'nearby_id',$nearby_id);
                     $response_text = 'Nearby Places updated successfully';
                }
				else{
                     $result = $this->General_model->add('tbl_nearby',$data);
                     $response_text = 'Nearby Places added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/viewNearby/', 'refresh');
		}
    	}

	public function getNearby()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Nearby_model->getNearbyList($param);
		$json_data = json_encode($data);
		echo $json_data;
	}

	public function editNearby($nearby_id)
	{
		$template['records'] = $this->General_model->get_row('tbl_nearby','nearby_id',$nearby_id);
		$template['body'] = 'Nearby/add';
		$template['script'] = 'Nearby/script';
		$this->load->view('template', $template);
	}

    
	public function deleteNearby(){
        $nearby_id = $this->input->post('nearby_id');
        $updateData = array('act_status' => 0);
        $data = $this->General_model->update('tbl_nearby',$updateData,'nearby_id',$nearby_id);
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