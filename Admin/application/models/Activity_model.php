<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Activity_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getActivityList($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('act_title', $searchValue); 
            $this->db->like('act_desc', $searchValue); 
            $this->db->like('act_pricing_info', $searchValue); 
        }
        $this->db->where("act_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(act_date,"%d/%m/%Y") as act_date');
		$this->db->from('tbl_activity');
		$this->db->order_by('act_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getActivityListCount($param);
        $data['recordsFiltered'] = $this->getActivityListCount($param);
        return $data;
	}
	public function getActivityListCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('act_title', $searchValue); 
            $this->db->like('act_desc', $searchValue); 
            $this->db->like('act_pricing_info', $searchValue); 
        }
		$this->db->select('*');
		$this->db->from('tbl_activity');
        $this->db->where("act_status",1);
        $query = $this->db->get();
    	return $query->num_rows();
    }

}
