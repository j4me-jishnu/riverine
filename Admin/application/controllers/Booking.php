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

    public function addRoomBooking(){
      var_dump($_POST);
      var_dump($_FILES);
      $booking_id=$_POST['booking_code'];
      $property_id=$_POST['property'];
      $checkin=$_POST['check_in'];
      $checkout=$_POST['check_out'];
      $adults_count=$_POST['adults_count'];
      $child_below5=$_POST['children_count_below_5'];
      $child_above5=$_POST['children_count_above_5'];
      $extra_bed=$_POST['extra_bed_count'];
      die;
      $counter=$_POST['counter'];


      for($i=0;$i<$counter;$i++){
          $insert_array=[
              'booking_id'=>$booking_id,
              'guest_name'=>$_POST['guest_name'][$i],
              'mobile'=>$_POST['mobile'][$i],
              'poi_type'=>$_POST['poi_type'][$i],
              'poi_doc_no'=>$_POST['document_no'][$i],
              'nationality'=>$_POST['nationality'][$i],
              'property_id'=>$property_id,
              'alloted_room_id'=>$_POST[''],
              'check_in'=>$checkin,
              'check_out'=>$checkout,
              'total_price'=>$total_cost,
              'status'=>1,
              'created_at'=>date('Y-m-d H:i:s'),
          ];
      }
    }

// add files to another table
// Alloted rooms history seperate table
// add calculation of cost

    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
