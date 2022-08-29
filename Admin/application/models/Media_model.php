<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Media_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getMediaTable($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('media_youtube_embed', $searchValue); 
        }
        $this->db->where("media_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(media_date,"%d/%m/%Y") as media_date');
		$this->db->from('tbl_media');
		$this->db->order_by('media_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getMediaTotalCount($param);
        $data['recordsFiltered'] = $this->getMediaTotalCount($param);
        return $data;
	}
	public function getMediaTotalCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('media_youtube_embed', $searchValue); 
        }
		$this->db->select('*,date_format(media_date,"%d/%m/%Y") as media_date');
		$this->db->from('tbl_media');
        $this->db->where("media_status",1);
		$this->db->order_by('media_id', 'DESC');
        $query = $this->db->get();
    	return $query->num_rows();
    }
}
