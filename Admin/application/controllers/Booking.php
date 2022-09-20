<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Booking extends MY_Controller
{
    private $result;

    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
    }

    public function showBookingInterface(){
      $template['avl_rooms']=$this->Rooms_model->get_available_rooms();
      $template['body']='BookingInterface/list';
      $template['script']='BookingInterface/script';
      $this->load->view('template',$template);
    }

    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
