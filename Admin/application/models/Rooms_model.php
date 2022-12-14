<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rooms_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_all_room_categories(){
        $query=$this->db->select('*')->get('tbl_room_categories');
        $result['data']=$query->result();
        return $result;
    }

    public function get_all_rooms(){
        $query=$this->db->select('tbl_rooms.*,tbl_room_categories.*,date_format(tbl_rooms.updated_at,"%d/%m/%Y %T") as updated_at, (SELECT COUNT(room_id) FROM tbl_room_images WHERE tbl_rooms.room_id=tbl_room_images.room_id) as image_count')
        ->join('tbl_room_categories','tbl_room_categories.cat_id=tbl_rooms.room_cat_id','left')
        ->get('tbl_rooms');
        $result['data']=$query->result();
        return $result;
    }

    public function get_last_booking_id(){
        $query=$this->db->select('id')->order_by('id', 'DESC')->limit(1)->get('tbl_room_bookings');
        return $query->num_rows()>0 ? $query->row()->id : 0;
    }

    public function get_property_list(){
        $query=$this->db->select('*')->get('tbl_properties');
        return $query->num_rows()>0?$query->result():false;
    }

    public function get_poi_list(){
        $query=$this->db->select('*')->get('tbl_poi_types');
        return $query->num_rows()>0?$query->result():false;
    }

    public function get_available_rooms(){
        $query=$this->db->select('*')->where('room_status',1)->get('tbl_rooms');
        return $query->num_rows()>0?$query->result():false;
    }

    public function get_single_room_price_details(){
      $query=$this->db->select('room_id,room_below_five_price, room_above_five_price, room_extra_bed_price, room_adult_price')->get('tbl_rooms');
      return $query->result();
    }

    public function insert_get_last_id($insert_array,$table){
        $this->db->insert($table, $insert_array);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function get_nationalities(){
      $query=$this->db->select('*')->get('tbl_nationality');
      return $query->num_rows()>0?$query->result():false;
    }

    public function get_pois(){
      $query=$this->db->select('*')->get('tbl_poi_types');
      return $query->num_rows()>0?$query->result():false;
    }


}
