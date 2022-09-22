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
        $this->load->model('Common_model');
    }

    public function showOffersPage(){
        $template['room_list']=$this->General_model->get_all_rooms();
        $template['category_list']=$this->Common_model->get_data('tbl_room_categories');
        $template['body'] = 'Offers/list';
        $template['script'] = 'Offers/script';
        $this->load->view('template', $template);
    }

    public function getSingleRoomPrice(){
        $id=$_POST['id'];
        $result=$this->Rooms_model->get_single_room_price_details();
        echo json_encode($result);
    }

    public function addOffer(){
        $insert_array=[
            'offer_name'=>$_POST['offer_name'],
            'offer_desc'=>$_POST['offer_desc'],
            'category_id'=>$_POST['category_id'],
            'offer_start'=>$_POST['offer_start'],
            'offer_end'=>$_POST['offer_end'],
            'offer_status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result=$this->Common_model->add_data('tbl_offers',$insert_array);
        if($result){
            $this->session->set_flashdata('message',"Offer Added Successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("/Offers/showOffersPage", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to add offer!");
            $this->session->set_flashdata('type',"error");
            redirect("/Offers/showOffersPage", 'refresh');
        }
    }

    public function getOffers(){
        $this->result=$this->Common_model->get_offers();
    }


    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
