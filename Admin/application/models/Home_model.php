<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getHomeTextList($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('ht_desc', $searchValue); 
        }
        $this->db->where("ht_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(ht_date,"%d/%m/%Y") as ht_date');
		$this->db->from('tbl_home_text');
		$this->db->order_by('ht_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getHomeTextListCount($param);
        $data['recordsFiltered'] = $this->getHomeTextListCount($param);
        return $data;
	}
	public function getHomeTextListCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('ht_desc', $searchValue); 
        }
		$this->db->select('*');
		$this->db->from('tbl_home_text');
        $this->db->where("ht_status",1);
        $query = $this->db->get();
    	return $query->num_rows();
    }

    public function getHomeDescList($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('hd_title', $searchValue);
            $this->db->like('hd_desc', $searchValue);
        }
        $this->db->where("hd_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(hd_date,"%d/%m/%Y") as hd_date');
		$this->db->from('tbl_home_desc');
		$this->db->order_by('hd_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getHomeDescListCount($param);
        $data['recordsFiltered'] = $this->getHomeDescListCount($param);
        return $data;
	}
	public function getHomeDescListCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('hd_title', $searchValue); 
            $this->db->like('hd_desc', $searchValue); 
        }
		$this->db->select('*');
		$this->db->from('tbl_home_desc');
        $this->db->where("hd_status",1);
        $query = $this->db->get();
    	return $query->num_rows();
    }

    public function getTestimonialList($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('tsml_cname', $searchValue);
            $this->db->like('tsml_descp', $searchValue);
        }
        $this->db->where("tsml_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(tsml_date,"%d/%m/%Y") as tsml_date');
		$this->db->from('tbl_testimonial');
		$this->db->order_by('tsml_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getTestimonialListCount($param);
        $data['recordsFiltered'] = $this->getTestimonialListCount($param);
        return $data;
	}
	public function getTestimonialListCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('tsml_cname', $searchValue); 
            $this->db->like('tsml_descp', $searchValue); 
        }
		$this->db->select('*');
		$this->db->from('tbl_testimonial');
        $this->db->where("tsml_status",1);
        $query = $this->db->get();
    	return $query->num_rows();
    }
}
