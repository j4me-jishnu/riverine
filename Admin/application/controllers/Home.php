<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
        if(! $this->is_logged_in()){
          redirect('/login');
        }
        
        $this->load->model('General_model');
        $this->load->model('Home_model');
	}

	public function viewHomeText()
	{
		$template['body'] = 'Home/Home_text/list';
		$template['script'] = 'Home/Home_text/script';
		$this->load->view('template', $template);
	}

	public function getHomeText()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Home_model->getHomeTextList($param);
		$json_data = json_encode($data);
		echo $json_data;
	}

	public function addHomeText(){
		$this->form_validation->set_rules('home_title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Home/Home_text/add';
			$template['script'] = 'Home/Home_text/script';
			$this->load->view('template', $template);
		}
		else {
			$ht_id = $this->input->post('ht_id');
			$data = array(
						'ht_desc' => $this->input->post('home_title'),
						);
				if($ht_id){
                     $result = $this->General_model->update('tbl_home_text',$data,'ht_id',$ht_id);
                     $response_text = ' updated successfully';
                }
				else{
                     $result = $this->General_model->add('tbl_home_text',$data);
                     $response_text = ' added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/HomeText/', 'refresh');
		}
	}

	public function editHomeText($id)
	{
		$template['records'] = $this->General_model->get_row('tbl_home_text','ht_id',$id);
		$template['body'] = 'Home/Home_text/add';
		$template['script'] = 'Home/Home_text/script';
		$this->load->view('template', $template);
	}

	public function deleteHomeText(){
        $ht_id = $this->input->post('ht_id');
        $updateData = array('ht_status' => 0);
        $data = $this->General_model->update('tbl_home_text',$updateData,'ht_id',$ht_id);
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

	public function viewHomeDesc()
	{
		$template['body'] = 'Home/Home_desc/list';
		$template['script'] = 'Home/Home_desc/script';
		$this->load->view('template', $template);
	}

	public function getHomeDesc()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Home_model->getHomeDescList($param);
		$json_data = json_encode($data);
		echo $json_data;
	}

	public function addHomeDesc(){
		$this->form_validation->set_rules('home_desc_title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Home/Home_desc/add';
			$template['script'] = 'Home/Home_desc/script';
			$this->load->view('template', $template);
		}
		else {
			$hd_id = $this->input->post('hd_id');
			$data = array(
						'hd_title' => $this->input->post('home_desc_title'),
						'hd_desc	' => $this->input->post('home_description'),
						);
				if($hd_id){
                     $result = $this->General_model->update('tbl_home_desc',$data,'hd_id',$hd_id);
                     $response_text = ' updated successfully';
                }
				else{
                     $result = $this->General_model->add('tbl_home_desc',$data);
                     $response_text = ' added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/viewHomeDesc/', 'refresh');
		}
	}

	public function ediHomeDesc($hd_id)
	{
		$template['records'] = $this->General_model->get_row('tbl_home_desc','hd_id',$hd_id);
		$template['body'] = 'Home/Home_desc/add';
		$template['script'] = 'Home/Home_desc/script';
		$this->load->view('template', $template);
	}

	public function deleteHomeDesc(){
        $hd_id = $this->input->post('hd_id');
        $updateData = array('hd_status' => 0);
        $data = $this->General_model->update('tbl_home_text',$updateData,'hd_id',$hd_id);
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

	public function viewTestimonial()
	{
		$template['body'] = 'Home/Testimonial/list';
		$template['script'] = 'Home/Testimonial/script';
		$this->load->view('template', $template);
	}

	public function addTestimonial(){
		$this->form_validation->set_rules('tsml_cname', 'CUSTOMER NAME', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Home/Testimonial/add';
			$template['script'] = 'Home/Testimonial/script';
			$this->load->view('template', $template);
		}
		else {
			$tsml_id = $this->input->post('tsml_id');
			if(!empty($_FILES['tsml_img']['name'])){
                $config['upload_path'] = 'uploads/testimoney/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['tsml_img']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('tsml_img')){
                    $uploadData = $this->upload->data();
                    $tsml_images = $uploadData['file_name'];
                }else{
                    $tsml_images = '';
                }
			}else{
					if($tsml_id)
					{
						$tsml_images = $this->input->post('tsml_img1');
					}
					else{
						$tsml_images ='Not uploaded';
					}
				 }
			$data = array(
						'tsml_cname' => $this->input->post('tsml_cname'),
						'tsml_descp	' => $this->input->post('tsml_descp'),
						'tsml_img	' => $tsml_images,

						);
				if($tsml_id){
                     $result = $this->General_model->update('tbl_testimonial',$data,'tsml_id',$tsml_id);
                     $response_text = 'Testimonial updated successfully';
                }
				else{
                     $result = $this->General_model->add('tbl_testimonial',$data);
                     $response_text = 'Testimonial added  successfully';
                }
				if($result){
	            $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
				}
				else{
	            $this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
				}
	        redirect('/viewTestimonial/', 'refresh');
		}
	}

	public function getTestimonial()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Home_model->getTestimonialList($param);
		$json_data = json_encode($data);
		echo $json_data;
	}

	public function editTestimonial($tsml_id)
	{
		$template['records'] = $this->General_model->get_row('tbl_testimonial','tsml_id',$tsml_id);
		$template['body'] = 'Home/Testimonial/add';
		$template['script'] = 'Home/Testimonial/script';
		$this->load->view('template', $template);
	}

	public function deleteTestimonial(){
        $tsml_id = $this->input->post('tsml_id');
        $updateData = array('tsml_status' => 0);
        $data = $this->General_model->update('tbl_testimonial',$updateData,'tsml_id',$tsml_id);
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