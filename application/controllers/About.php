<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('General_model');
	}
	
	public function index()
	{
		$cond = [ 'hd_status' => 1 ];
		$data['descp'] = $this->General_model->getall('tbl_home_desc',$cond);
		$this->load->view('Header/Header');
		$this->load->view('about',$data);
		$this->load->view('Footer/Footer');
	}
}
