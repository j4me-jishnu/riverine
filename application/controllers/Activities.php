<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

	public $table = 'tbl_activity';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('General_model');
	}

	public function index()
	{
		$cond = [ 'act_status' => 1 ];	
		$data['activity'] = $this->General_model->getall($this->table,$cond);
		$this->load->view('Header/Header');
		$this->load->view('activities',$data);
		$this->load->view('Footer/Footer');
	}
}
