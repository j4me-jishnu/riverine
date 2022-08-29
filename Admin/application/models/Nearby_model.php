<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nearby_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getNearbyList($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('nearby_title', $searchValue);
            $this->db->like('nearby_desc', $searchValue);
        }
        $this->db->where("nearby_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(nearby_date,"%d/%m/%Y") as nearby_date');
		$this->db->from('tbl_nearby');
		$this->db->order_by('nearby_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getNearbyListCount($param);
        $data['recordsFiltered'] = $this->getNearbyListCount($param);
        return $data;
	}
	public function getNearbyListCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('nearby_title', $searchValue);
            $this->db->like('nearby_desc', $searchValue);
        }
		$this->db->select('*');
		$this->db->from('tbl_nearby');
        $this->db->where("nearby_status",1);
        $query = $this->db->get();
    	return $query->num_rows();
    }

}
