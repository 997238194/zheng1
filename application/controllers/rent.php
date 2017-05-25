<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rent extends CI_Controller
{
    public function __controller()
    {
        parent::__construct();
    }

    public function pindex()
    {
        $this->load->view('index.php');
    }

//查询数据库信息
    public function index()
    {
        $this->load->model('rent_model');
        $sellrs = $this->rent_model->get_sell();
        $arr['rent'] = $sellrs;
        $status=0;
        if($this->session->userdata('id')){
            $status=1;
        }
        $arr["status"]=$status;
        $this->load->view('index.php', $arr);

    }

    public function rents()
    {

        $this->load->model('rent_model');
        $this->load->model('search_model');
        $rentrs = $this->rent_model->get_rent();
        $sears = $this->search_model->search();
        $arr['rent'] = $rentrs;
        $arr['sea']=$sears;
        $this->load->view('rentlist.php',$arr);
    }



    public function rentdetail(){
        $rent_id=$this->uri->segment(3);
        $this->load->model('rent_model');
        $flag=0;
        $uid=$this->session->userdata('id');
        $rentrs = $this->rent_model->get_rents($rent_id);
        $con=0;
        if($this->rent_model->check_con($rent_id,$uid,$flag)){
            $con=1;
        }
        $arr['rent'] = $rentrs;
        $arr['con'] = $con;
        $this->load->view('rentdetail.php',$arr);
    }

    public function delete()
    {

        $RENT_id = $this->input->post('RENT_id');

        $this->load->model('rent_model');
        $query = $this->rent_model->delete($RENT_id);
        if ($query) {
            echo "success";
        }else{
            echo "fail";
        }
    }
    public function con_buy(){
        $con_id=$this->input->post("con_id");
        $flag=0;/*表示关注买房源*/
        $uid=$this->session->userdata('id');
        $this->load->model('rent_model');
        $result=$this->rent_model->add_con($con_id,$uid,$flag);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }
    public function delete_con_buy(){
        $con_id=$this->input->post("con_id");
        $flag=0;/*表示关注买房源*/
        $uid=$this->session->userdata('id');
        $this->load->model('rent_model');
        $result=$this->rent_model->delete_con($con_id,$uid,$flag);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }



}









?>