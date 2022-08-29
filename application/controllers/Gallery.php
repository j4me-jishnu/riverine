<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('General_model');
	}

	public function index()
	{
		$cond = [ 'gallery_status' => 1 ];
		$data['images'] = $this->General_model->getall('tbl_gallery',$cond);
		$this->load->view('Header/Header');
		$this->load->view('gallery',$data);
		$this->load->view('Footer/Footer');
	}
}
