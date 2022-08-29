<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getEMailTable($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('mail_title', $searchValue); 
        }
        $this->db->where("mail_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(mail_date,"%d/%m/%Y") as mail_date');
		$this->db->from('tbl_mail');
		$this->db->order_by('mail_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getEMailTotalCount($param);
        $data['recordsFiltered'] = $this->getEMailTotalCount($param);
        return $data;
	}
	public function getEMailTotalCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('mail_title', $searchValue); 
        }
		$this->db->select('*,date_format(mail_date,"%d/%m/%Y") as mail_date');
		$this->db->from('tbl_mail');
        $this->db->where("mail_status",1);
		$this->db->order_by('mail_id', 'DESC');
        $query = $this->db->get();
    	return $query->num_rows();
    }
}
