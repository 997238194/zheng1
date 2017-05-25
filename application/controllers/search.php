<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function search(){
        $text1=$this->input->post("text1");
        $text2=$this->input->post("text2");
        $text3=$this->input->post("text3");
        $text4=$this->input->post("text4");

        $this->load->model('search_model');
        $sears = $this->search_model->searchs($text1,$text2,$text3,$text4);

        echo json_encode($sears);

    }
    public function searchs(){
        $text1=$this->input->post("text1");
        $text2=$this->input->post("text2");
        $text3=$this->input->post("text3");
        $text4=$this->input->post("text4");


        $this->load->model('search_model');
        $sears = $this->search_model->searches($text1,$text2,$text3,$text4);

        echo json_encode($sears);

    }

    public function searchinput(){
        $text1=$this->input->post("text1");


        $this->load->model('search_model');
        $sears = $this->search_model->searchinput($text1);
        echo json_encode($sears);

    }


    public function searchsell(){
        $text1=$this->input->post("text1");


        $this->load->model('search_model');
        $sears = $this->search_model->searchsell($text1);
        echo json_encode($sears);

    }
    public function searchrent(){
        $text1=$this->input->post("text1");


        $this->load->model('search_model');
        $sears = $this->search_model->searchrent($text1);
        echo json_encode($sears);

    }

    public function map(){
        $this->load->view('map.php');
    }










}
?>