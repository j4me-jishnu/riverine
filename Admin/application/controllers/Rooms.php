<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rooms extends MY_Controller
{
    private $result;

    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
    }

    private function invoice_num ($input, $pad_len = 7, $prefix = null) {
        if($pad_len <= strlen($input)){
            return false;
        }
        if(is_string($prefix)){
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
        }
        else{
            return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
        }
    }

    public function RoomDetails(){
        $template['body']='Rooms/list';
        $template['script']='Rooms/script';
        $this->load->view('template',$template);
    }

    public function addRoomCategory(){
        $insert_array=['cat_name'=>$_POST['cat_name']];
        $result=$this->General_model->add('tbl_room_categories',$insert_array);
        if($result){
            $this->session->set_flashdata('message',"Room Category Added Successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("/Rooms/RoomDetails", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to add category!");
            $this->session->set_flashdata('type',"error");
            redirect("/Rooms/RoomDetails", 'refresh');
        }
    }

    public function getRoomCategories(){
        $this->result=$this->Rooms_model->get_all_room_categories();
    }

    public function getRooms(){
        $this->result=$this->Rooms_model->get_all_rooms();
    }

    public function addRoom(){
        $insert_array=[
            'room_name'=>$_POST['room_name'],
            'room_cat_id'=>$_POST['room_cat'],
            'room_adult_price'=>$_POST['room_adult_price'],
            'room_below_five_price'=>$_POST['below5_price'],
            'room_above_five_price'=>$_POST['above5_price'],
            'room_extra_bed_price'=>$_POST['extra_bed_price'],
            'room_status'=>$_POST['room_status'],
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result_id=$this->Rooms_model->insert_get_last_id($insert_array,'tbl_rooms');

          $count = count($_FILES['files']['name']);
          // echo $count;
          // var_dump($_FILES);
          // var_dump($_POST); die;

          for($i=0;$i<$count;$i++){
          if(!empty($_FILES['files']['name'][$i])){
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
            $config['upload_path'] = 'Images/Rooms/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000';
            $config['file_name'] = $_FILES['files']['name'][$i];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('file')){
              $uploadData = $this->upload->data();
              $filename = $uploadData['file_name'];
              $data=[
                  'room_id'=>$result_id,
                  'room_image'=>$filename,
                  'created_at'=>date('Y-m-d H:i:s'),
              ];
              $result=$this->General_model->add('tbl_room_images',$data);
            }
            else{
                echo "<script>alert(".$this->$this->upload->display_errors().")</script>";
                $result=false;
            }
          }
        }

        if($result_id && $result){
            $this->session->set_flashdata('message',"Room Added Successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("/Rooms/RoomDetails", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to add room!");
            $this->session->set_flashdata('type',"error");
            redirect("/Rooms/RoomDetails", 'refresh');
        }
    }

    public function showRoomAvailability(){
        $template['body']='RoomAvailability/list';
        $template['script']='RoomAvailability/script';
        $this->load->view('template',$template);
    }

    public function showBookings(){
        $template['booking_number']=$this->getBookingId();
        $template['properties']=$this->Rooms_model->get_property_list();
        $template['pois']=$this->Rooms_model->get_poi_list();
        $template['available_rooms']=$this->Rooms_model->get_available_rooms();
        $template['body']='RoomBookings/list';
        $template['script']='RoomBookings/script';
        $this->load->view('template',$template);
    }

    public function showAddBoookingPage(){
        $template['body']='RoomBookings/add';
        $template['script']='RoomBookings/script';
        $this->load->view('template',$template);
    }

    public function bookRoom(){
        $insert_array=[];
        $result=$this->General_model->add('tbl_bookings',$insert_array);
        if($result){
            $this->session->set_flashdata('message',"Booking saved successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("Rooms", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to book room!");
            $this->session->set_flashdata('type',"error");
            redirect("Rooms", 'refresh');
        }
    }

    public function getBookingId(){
        $lastId=$this->Rooms_model->get_last_booking_id();
        $invoice_num=$this->invoice_num($lastId+1,7,'RSB-');
        return $invoice_num;
    }

    public function getProperties(){
        $this->result=$this->Rooms_model->get_property_list();
    }

    public function getAvailableRooms(){
        $this->result=$this->Rooms_model->get_available_rooms();
    }

    public function listNationalities(){
        $this->result=$this->Rooms_model->get_nationalities();
    }
    public function listPOIs(){
        $this->result=$this->Rooms_model->get_pois();
    }

    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
