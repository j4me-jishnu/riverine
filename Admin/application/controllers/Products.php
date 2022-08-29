<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Products extends MY_Controller
{
	public $table = 'tbl_products';
	public $page  = 'Products';
	public function __construct()
	{
		parent::__construct();
		if (!$this->is_logged_in()) {
			redirect('/login');
		}

		$this->load->model('General_model');
		$this->load->model('Products_model');
	}
	public function index()
	{
		$template['body'] = 'Products/list';
		$template['script'] = 'Products/script';
		$this->load->view('template', $template);
	}
	public function add()
	{
		$this->form_validation->set_rules('p_name', 'Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Products/add';
			$template['script'] = 'Products/script';
			$this->load->view('template', $template);
		} else {
			$products_id = $this->input->post('products_id');
            if(!empty($_FILES['p_img']['name'])){
                $config['upload_path'] = 'uploads/products/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['p_img']['name'];
                $pic = $_FILES['p_img']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('p_img')){
                    $uploadData = $this->upload->data();
                    $p_imgname = $uploadData['file_name'];
                }else{
                    $p_imgname = '';
                }
			}else{
					if($products_id)
					{
						$p_imgname = $this->input->post('p_img1');
					}
					else{
						$p_imgname ='Not uploaded';
					}
				 }
				 if(!empty($_FILES['p_inn_img']['name'])){
					$config['upload_path'] = 'uploads/products/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['p_inn_img']['name'];
					$pic = $_FILES['p_inn_img']['name'];
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('p_inn_img')){
						$uploadData2 = $this->upload->data();
						$p_inn_imgname = $uploadData2['file_name'];
					}else{
						$p_inn_imgname = '';
					}
				}else{
						if($products_id)
						{
							$p_inn_imgname = $this->input->post('p_inn_img1');
						}
						else{
							$p_inn_imgname ='Not uploaded';
						}
					 }
			$data = array(
				'products_name' => $this->input->post('p_name'),
                'products_img' => $p_imgname,
				'products_inner_img' => $p_inn_imgname,
                
			);
			if ($products_id) {
				$result = $this->General_model->update($this->table, $data, 'products_id', $products_id);
				$response_text = 'Product Updated Successfully';
			} else {
				$result = $this->General_model->add($this->table, $data);
				$response_text = 'Product Added  Successfully';
			}
			if ($result) {
				$this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
			} else {
				$this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
			}
			redirect('/Products/', 'refresh');
		}
	}

	public function get()
	{
		$param['draw'] = (isset($_REQUEST['draw'])) ? $_REQUEST['draw'] : '';
		$param['length'] = (isset($_REQUEST['length'])) ? $_REQUEST['length'] : '10';
		$param['start'] = (isset($_REQUEST['start'])) ? $_REQUEST['start'] : '0';
		$param['order'] = (isset($_REQUEST['order'][0]['column'])) ? $_REQUEST['order'][0]['column'] : '';
		$param['dir'] = (isset($_REQUEST['order'][0]['dir'])) ? $_REQUEST['order'][0]['dir'] : '';
		$param['searchValue'] = (isset($_REQUEST['search']['value'])) ? $_REQUEST['search']['value'] : '';

		$data = $this->Products_model->getProductTable($param);
		$json_data = json_encode($data);
		echo $json_data;
	}
	public function delete()
	{
		$products_id = $this->input->post('products_id');
		$updateData = array('media_status' => 0);
		$data = $this->General_model->update($this->table, $updateData, 'products_id', $products_id);
		if ($data) {
			$response['text'] = 'Deleted successfully';
			$response['type'] = 'success';
		} else {
			$response['text'] = 'Something went wrong';
			$response['type'] = 'error';
		}
		$response['layout'] = 'topRight';
		$data_json = json_encode($response);
		echo $data_json;
		//redirect('/Contact/', 'refresh');
	}
	public function edit($products_id)
	{
		$template['body'] = 'Products/add';
		$template['script'] = 'Products/script';
		$template['records'] = $this->General_model->get_row($this->table, 'products_id', $products_id);
		$this->load->view('template', $template);
	}
}
