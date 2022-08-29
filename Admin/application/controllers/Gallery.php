<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends MY_Controller {
	public $table = 'tbl_gallery';
	public $page  = 'Gallery';
	public function __construct() {
		parent::__construct();
        if(! $this->is_logged_in()){
          redirect('/login');
        }
        
        $this->load->model('General_model');
        $this->load->model('Gallery_model');
	}
	public function viewGallery()
	{
		$template['body'] = 'Gallery/list';
		$template['script'] = 'Gallery/script';
		$this->load->view('template', $template);
	}
	public function addGallery(){
		$this->form_validation->set_rules('g_title', 'Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Gallery/add';
			$template['script'] = 'Gallery/script';
			$this->load->view('template', $template);
		}
		else {
			$gallery_id = $this->input->post('gallery_id');
            if(!empty($_FILES['g_image']['name'])){
                $config['upload_path'] = 'uploads/gallery/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['g_image']['name'];
                $pic = $_FILES['g_image']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('g_image')){
                    $uploadData = $this->upload->data();
                    $g_imgname = $uploadData['file_name'];
                }else{
                    $g_imgname = '';
                }
			}else{
					if($gallery_id)
					{
						$g_imgname = $this->input->post('g_image1');
					}
					else{
						$g_imgname ='Not uploaded';
					}
				 }
			$data = array(
						'gallery_title' => $this->input->post('g_title'),
						'gallery_image' => $g_imgname
						);
				if($gallery_id){
                     $result = $this->General_model->update($this->table,$data,'gallery_id',$gallery_id);
                     $response_text = 'Gallery Updated Successfully';
                }
				else{
                     $result = $this->General_model->add($this->table,$data);
                     $response_text = 'Gallery Added  Successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/viewGallery/', 'refresh');
		}
	}

	public function getGallery(){
    	$param['draw'] = (isset($_REQUEST['draw']))?$_REQUEST['draw']:'';
        $param['length'] =(isset($_REQUEST['length']))?$_REQUEST['length']:'10'; 
        $param['start'] = (isset($_REQUEST['start']))?$_REQUEST['start']:'0';
        $param['order'] = (isset($_REQUEST['order'][0]['column']))?$_REQUEST['order'][0]['column']:'';
        $param['dir'] = (isset($_REQUEST['order'][0]['dir']))?$_REQUEST['order'][0]['dir']:'';
        $param['searchValue'] =(isset($_REQUEST['search']['value']))?$_REQUEST['search']['value']:'';
        
    	$data = $this->Gallery_model->getGalleryTable($param);
    	$json_data = json_encode($data);
    	echo $json_data;
    }
	public function deleteGallery(){
        $gallery_id = $this->input->post('gallery_id');
        $updateData = array('contact_status' => 0);
        $data = $this->General_model->update($this->table,$updateData,'gallery_id',$gallery_id);
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
	public function editGallery($gallery_id){
		$template['body'] = 'Gallery/add';
		$template['script'] = 'Gallery/script';
		$template['records'] = $this->General_model->get_row($this->table,'gallery_id',$gallery_id);
    	$this->load->view('template', $template);
	}
}