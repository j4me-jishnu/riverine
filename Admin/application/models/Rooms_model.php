<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rooms_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getGalleryTable($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('gallery_title', $searchValue); 
        }
        $this->db->where("gallery_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(gallery_date,"%d/%m/%Y") as gallery_date');
		$this->db->from('tbl_gallery');
		$this->db->order_by('gallery_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getGalleryTotalCount($param);
        $data['recordsFiltered'] = $this->getGalleryTotalCount($param);
        return $data;
	}
	public function getGalleryTotalCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('gallery_title', $searchValue); 
        }
		$this->db->select('*,date_format(gallery_date,"%d/%m/%Y") as gallery_date');
		$this->db->from('tbl_gallery');
        $this->db->where("gallery_status",1);
		$this->db->order_by('gallery_id', 'DESC');
        $query = $this->db->get();
    	return $query->num_rows();
    }
}
