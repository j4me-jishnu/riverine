<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nearby_Places extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('General_model');
	}

	public function index()
	{
		$cond = [ 'nearby_status' => 1 ];
		$data['near_by'] = $this->General_model->getall('tbl_nearby',$cond);
		$this->load->view('Header/Header');
		$this->load->view('nearby-places',$data);
		$this->load->view('Footer/Footer');
	}
}
