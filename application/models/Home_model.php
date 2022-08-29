<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
 
    public function getHomeTitle()
    {
        $this->db->select('*');
        $this->db->from('tbl_home_text');
        $this->db->where('ht_status',1);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function getHomeDesc()
    {
        $this->db->select('*');
        $this->db->from('tbl_home_desc');
        $this->db->where('hd_status',1);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function getTestimonialList()
    {
        $this->db->select('*');
        $this->db->from('tbl_testimonial');
        $this->db->where('tsml_status',1);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function getNearbyPlaces()
    {
        $this->db->select('*');
        $this->db->from('tbl_nearby');
        $this->db->where('nearby_status',1);
        $this->db->where('nearby_display',1);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
}
