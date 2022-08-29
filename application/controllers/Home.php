<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Home_model');
	}
	public function index()
	{
		$data['nearbys'] = $this->Home_model->getNearbyPlaces();
		$data['title'] = $this->Home_model->getHomeTitle();
		$data['desc'] = $this->Home_model->getHomeDesc();
		$data['testimonial'] = $this->Home_model->getTestimonialList();
		$this->load->view('Header/Header');
		$this->load->view('home',$data);
		$this->load->view('Footer/Footer');
	}
}
