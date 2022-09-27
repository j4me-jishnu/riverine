<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function add_data($table,$data_array){
    $query=$this->db->insert($table,$data_array);
    return $query ? true : false;
  }

  public function insert_get_id($table,$data_array){
    $query=$this->db->insert($table,$data_array);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function add_data_where($table,$data_array,$condition){
    $query=$this->db->insert($table,$data_array)->where($condition);
    return $query ? true : false;
  }

  public function get_data($table){
    $query=$this->db->select('*')->get($table);
    $records=$query->result();
    return $records ? $records : false;
  }

  public function get_data_where($table,$condition){
    $query=$this->db->select('*')->where($condition)->get($table);
    $records=$query->result();
    return $records ? $records : false;
  }

  public function get_data_where_row($table,$condition){
    $query=$this->db->select('*')->where($condition)->get($table);
    $records=$query->row();
    return $records ? $records : false;
  }

  public function update_data($table,$data_array,$condition){
    $query=$this->db->where($condition)->update($table,$data_array);
    return $query ? true : false;
  }

  public function delete_data($table,$condition){
    $query=$this->db->where($condition)->delete($table);
    return $query ? true : false;
  }

  private function invoice_num ($input, $pad_len = 7, $prefix = null){
    if ($pad_len <= strlen($input)){
      return false;
    }
    if (is_string($prefix)){
      return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    }else{
      return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }
  }

  // Offers section

  public function get_offers(){
    $query=$this->db->select('tbl_offers.*,tbl_room_categories.cat_id,cat_name,date_format(tbl_offers.created_at,"%d/%m/%Y") as created_at')
    ->join('tbl_room_categories','tbl_room_categories.cat_id=tbl_offers.category_id','left')
    ->get('tbl_offers');
    $result['data']=$query->result();
    return $result;
  }

  public function get_faqs(){
    $query=$this->db->select('*,date_format(updated_at,"%d/%m/%Y") as updated_at')
    ->get('tbl_faq');
    $result['data']=$query->result();
    return $result;
  }

  public function get_reviews(){
    $query=$this->db->select('*,date_format(updated_at,"%d/%m/%Y") as updated_at,,date_format(updated_at,"%d/%m/%Y") as created_at')
    ->get('tbl_user_reviews');
    $result['data']=$query->result();
    return $result;
  }

  public function get_events(){
    $query=$this->db->select('*,date_format(tbl_events.updated_at,"%d/%m/%Y") as updated_at, (SELECT COUNT(id) FROM tbl_event_images WHERE tbl_event_images.event_id = tbl_events.event_id) as image_count')
    ->join('tbl_event_images','tbl_event_images.id=tbl_events.event_id','left')
    ->get('tbl_events');
    $result['data']=$query->result();
    return $result;
  }

  public function get_promocode(){
    $query=$this->db->select('*,date_format(tbl_promocode.updated_at,"%d/%m/%Y") as updated_at')
    ->join('tbl_room_categories','tbl_room_categories.cat_id=tbl_promocode.code_room_cat','left')
    ->get('tbl_promocode');
    $result['data']=$query->result();
    return $result;
  }

}
