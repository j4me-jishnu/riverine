<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Media extends MY_Controller
{
	public $table = 'tbl_media';
	public $page  = 'Media';
	public function __construct()
	{
		parent::__construct();
		if (!$this->is_logged_in()) {
			redirect('/login');
		}

		$this->load->model('General_model');
		$this->load->model('Media_model');
	}
	public function index()
	{
		$template['body'] = 'Media/list';
		$template['script'] = 'Media/script';
		$this->load->view('template', $template);
	}
	public function add()
	{
		$this->form_validation->set_rules('video_embed_link', 'Video Url', 'required');
		if ($this->form_validation->run() == FALSE) {
			$template['body'] = 'Media/add';
			$template['script'] = 'Media/script';
			$this->load->view('template', $template);
		} else {
			$media_id = $this->input->post('media_id');
			$data = array(
				'media_youtube_embed' => $this->input->post('video_embed_link'),
			);
			if ($media_id) {
				$result = $this->General_model->update($this->table, $data, 'media_id', $media_id);
				$response_text = 'Media Updated Successfully';
			} else {
				$result = $this->General_model->add($this->table, $data);
				$response_text = 'Media Added  Successfully';
			}
			if ($result) {
				$this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
			} else {
				$this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
			}
			redirect('/Media/', 'refresh');
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

		$data = $this->Media_model->getMediaTable($param);
		$json_data = json_encode($data);
		echo $json_data;
	}
	public function delete()
	{
		$media_id = $this->input->post('media_id');
		$updateData = array('media_status' => 0);
		$data = $this->General_model->update($this->table, $updateData, 'media_id', $media_id);
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
	public function edit($media_id)
	{
		$template['body'] = 'Media/add';
		$template['script'] = 'Media/script';
		$template['records'] = $this->General_model->get_row($this->table, 'media_id', $media_id);
		$this->load->view('template', $template);
	}
}
