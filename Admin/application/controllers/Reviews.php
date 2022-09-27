<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reviews extends MY_Controller
{
    private $result;
    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
        $this->load->model('Common_model');
    }

    public function showReviewsPage(){
        $template['body'] = 'Reviews/list';
        $template['script'] = 'Reviews/script';
        $this->load->view('template', $template);
    }

    public function getReviews(){
        $this->result=$this->Common_model->get_reviews();
    }


    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
