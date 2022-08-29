<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Family_suite extends CI_Controller {

	public function index()
	{
		$this->load->view('Header/Header');
		$this->load->view('family-suite-details');
		$this->load->view('Footer/Footer');
	}
}
