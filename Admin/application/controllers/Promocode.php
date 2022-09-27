<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Promocode extends MY_Controller
{
    private $result;
    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
        $this->load->model('Common_model');
    }
    public function showPromocodePage(){
        $template['category_list'] = $this->Common_model->get_data('tbl_room_categories');
        $template['body'] = 'Promocode/list';
        $template['script'] = 'Promocode/script';
        $this->load->view('template', $template);
    }
    public function addPromocode(){
        $insert_array=[
            'code_name'=>$_POST['code'],
            'code_description'=>$_POST['code_description'],
            'code_room_cat'=>$_POST['category_id'],
            'code_deduction_perc'=>$_POST['deduction_perc'],
            'code_max_ded_amt'=>$_POST['maximum_deduction'],
            'code_status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result=$this->Common_model->add_data('tbl_promocode',$insert_array);
        if($result){
            $this->session->set_flashdata('message',"Promo code created successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("/Promocode/showPromocodePage", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to create promo code!");
            $this->session->set_flashdata('type',"error");
            redirect("/Promocode/showPromocodePage", 'refresh');
        }
    }

    public function getPromocode(){
        $this->result=$this->Common_model->get_promocode();
    }
    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }
}
