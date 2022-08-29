<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Junior_suite extends CI_Controller {

	public function index()
	{
		$this->load->view('Header/Header');
		$this->load->view('junior-suite');
		$this->load->view('Footer/Footer');
	}
}
