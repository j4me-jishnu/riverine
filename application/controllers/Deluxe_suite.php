<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deluxe_suite extends CI_Controller {

	public function index()
	{
		$this->load->view('Header/Header');
		$this->load->view('deluxe-double-room');
		$this->load->view('Footer/Footer');
	}
}
