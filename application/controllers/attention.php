<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Attention extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("attention_model");
    }
    public function select(){
        $uid=$this->session->userdata('id');
        $buy=$this->attention_model->get_all_buy($uid);
        $rent=$this->attention_model->get_all_rent($uid);
        $arr["buy"]=$buy;
        $arr["rent"]=$rent;
        $this->load->view('attention.php', $arr);
    }

   
}