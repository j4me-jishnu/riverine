<?php
Class Dashboard_model extends CI_Model{
	public function getCurrentSale()
	{
		$today = date('Y-m-d');
		$this->db->select('sum(service_nettotal)as SaleTotal');
		$this->db->from('sale_details');
		$this->db->where("sale_date", $today);
		$this->db->where("service_status",1);
		
		$query = $this->db->get();
	return $query->result();
		
	}
	public function getcutomers()
	{
		$this->db->select('count(customer_id)as customer');
		$this->db->from('customerdetails');
		$this->db->where("customer_status",1);
		$query = $this->db->get();
		return $query->result();
	}
	public function totalsale()
	{
		$this->db->select('sum(service_nettotal)as nettotal');
		$this->db->from('sale_details');
		$this->db->where("service_status",1);
		$query = $this->db->get();
		return $query->result();
	}
	public function services()
	{
		$this->db->select('count(service_id)as service');
		$this->db->from('service_details');
		$this->db->where("service_status",1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getNewusers()
	{
		$this->db->select('*');
		$this->db->from('user_details');
		$this->db->order_by('id', 'DESC');
		$this->db->limit('10');
		$this->db->where("status",1);
		$this->db->where("user_type",'S');
        $query = $this->db->get();
    	return $query->result();
	}
	public function getNewservices()
	{
		$this->db->select('*');
		$this->db->from('service_details');
		$this->db->order_by('service_id', 'DESC');
		$this->db->limit('10');
		$this->db->where("service_status",1);
		$query = $this->db->get();
    	return $query->result();
	}
	
	
}
?>