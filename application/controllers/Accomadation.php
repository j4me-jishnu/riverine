<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accomadation extends CI_Controller {

	public function index()
	{
		$this->load->view('Header/Header');
		$this->load->view('accomadation');
		$this->load->view('Footer/Footer');
	}
}
