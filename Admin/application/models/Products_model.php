<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function getProductTable($param){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('products_name', $searchValue);
        }
        $this->db->where("products_status",1);
        if ($param['start'] != 'false' and $param['length'] != 'false') {
        	$this->db->limit($param['length'],$param['start']);
        }
		$this->db->select('*,date_format(products_date,"%d/%m/%Y") as products_date');
		$this->db->from('tbl_products');
		$this->db->order_by('products_id', 'DESC');
        $query = $this->db->get();
        $data['data'] = $query->result();
        $data['recordsTotal'] = $this->getProductTotalCount($param);
        $data['recordsFiltered'] = $this->getProductTotalCount($param);
        return $data;
	}
	public function getProductTotalCount($param = NULL){
		$searchValue =($param['searchValue'])?$param['searchValue']:'';
        if($searchValue){
            $this->db->like('products_name', $searchValue); 
        }
		$this->db->select('*,date_format(products_date,"%d/%m/%Y") as products_date');
		$this->db->from('tbl_products');
        $this->db->where("products_status",1);
		$this->db->order_by('products_id', 'DESC');
        $query = $this->db->get();
    	return $query->num_rows();
    }
}
