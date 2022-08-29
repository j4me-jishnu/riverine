<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('Header/Header');
		$this->load->view('contact');
		$this->load->view('Footer/Footer');
	}
}
