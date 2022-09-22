<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use CodeItNow\BarcodeBundle\Utils\QrCode;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
class Events extends MY_Controller
{
    private $result;
    public function __construct(){
        parent::__construct();
        if (! $this->is_logged_in()) { redirect('/login'); }
        $this->load->model('Rooms_model');
        $this->load->model('General_model');
        $this->load->model('Common_model');
    }

    public function showEventsPage(){
        $template['body'] = 'Events/list';
        $template['script'] = 'Events/script';
        $this->load->view('template', $template);
    }

    public function getEvents(){
        $this->result=$this->Common_model->get_events();
    }

    public function addEvent(){
        $qr=$this->generateQr($_POST['event_name'],$_POST['event_desc'],$_POST['event_date']);
        $insert_array=[
            'event_name'=>$_POST['event_name'],
            'event_description'=>$_POST['event_desc'],
            'event_qr'=>$qr,
            'event_date'=>$_POST['event_date'],
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result_id=$this->Common_model->insert_get_id('tbl_events',$insert_array);
        $count = count($_FILES['files']['name']);
        for($i=0;$i<$count;$i++){
            if(!empty($_FILES['files']['name'][$i])){
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $config['upload_path'] = 'Images/Events';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '5000';
                $config['file_name'] = $_FILES['files']['name'][$i];

                $this->load->library('upload',$config);

                if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $data=[
                        'event_id'=>$result_id,
                        'file'=>$filename,
                        'created_at'=>date('Y-m-d H:i:s'),
                    ];
                    $result=$this->General_model->add('tbl_event_images',$data);
                }
                else{
                    echo "<script>alert(".$this->$this->upload->display_errors().")</script>";
                    $result=false;
                }
            }
        }
        if($result_id && $result){
            $this->session->set_flashdata('message',"Event Added Successfully!");
            $this->session->set_flashdata('type',"success");
            redirect("/Events/showEventsPage", 'refresh');
        }
        else{
            $this->session->set_flashdata('message',"Something went wrong! Failed to add event!");
            $this->session->set_flashdata('type',"error");
            redirect("/Events/showEventsPage", 'refresh');
        }
    }

    public function generateQr($event_name,$event_desc,$event_date){
  		$item_desciption="Event name : ".$event_name."\n";
  		$item_desciption.="Details :".$event_desc." \n";
  		$item_desciption.="Date : ".$event_date."\n";
  		$qrCode = new QrCode();
  		$qrCode
  		->setText($item_desciption)
  		->setSize(300)
  		->setPadding(10)
  		->setErrorCorrection('high')
  		->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
  		->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
  		->setLabel('Scan Qr Code')
  		->setLabelFontSize(16)
  		->setImageType(QrCode::IMAGE_TYPE_PNG);
  		$qr_image=$qrCode->generate();
  		return $qr_image;
  		// echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
  	}


    public function __destruct(){
        if(isset($this->result)){
            echo json_encode($this->result);
        }
    }

}
