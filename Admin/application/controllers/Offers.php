<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Offers extends MY_Controller
{
    private $result;
    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
    }

    public function showOffersPage(){
        $template['room_list']=$this->General_model->get_all_rooms();
        $template['body'] = 'Offers/list';
        $template['script'] = 'Offers/script';
        $this->load->view('template', $template);
    }

    public function getSingleRoomPrice(){
        $id=$_POST['id'];
        $result=$this->Rooms_model->get_single_room_price_details();
        echo json_encode($result);
    }


    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
