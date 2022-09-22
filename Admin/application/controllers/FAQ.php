<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FAQ extends MY_Controller
{
    private $result;
    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
        $this->load->model('Common_model');
    }

    public function showFAQPage(){
        $template['body'] = 'FAQ/list';
        $template['script'] = 'FAQ/script';
        $this->load->view('template', $template);
    }

    public function addFAQ(){
      $insert_array=[
        'question'=>$_POST['question'],
        'answer'=>$_POST['answer'],
        'status'=>1,
        'created_at'=>date('Y-m-d H:i:s'),
      ];
      $result=$this->Common_model->add_data('tbl_faq',$insert_array);
      if($result){
        $this->session->set_flashdata('message',"FAQ Added Successfully!");
        $this->session->set_flashdata('type',"success");
        redirect("/FAQ/showFAQPage", 'refresh');
      }
      else{
        $this->session->set_flashdata('message',"Something went wrong! Failed to add FAQ!");
        $this->session->set_flashdata('type',"error");
        redirect("/FAQ/showFAQPage", 'refresh');
      }
    }

    public function getFAQs(){
        $this->result=$this->Common_model->get_faqs();
    }

    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
