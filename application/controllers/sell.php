<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sell extends CI_Controller{
    public function __controller()
    {
        parent::__construct();
    }
    public function sells(){
        $this->load->model('sell_model');
        $this->load->model('search_model');
        $sellrs = $this->sell_model->get_sell();
        $sears = $this->search_model->search();
        $arr['sell'] = $sellrs;
        $arr['sea']=$sears;
        $this->load->view('houselist.php',$arr);
    }
    public function selldetail(){
        $sell_id=$this->uri->segment(3);
        $this->load->model('sell_model');
        $flag=1;
        $uid=$this->session->userdata('id');
        $sellrs = $this->sell_model->get_sells($sell_id);
        $con=0;
        if($this->sell_model->check_con($sell_id,$uid,$flag)){
            $con=1;
        }
        $arr['rent'] = $sellrs;
        $arr['con'] = $con;
        $this->load->view('housedetail.php',$arr);
    }
    public function delete()
    {

        $SELL_id = $this->input->post('SELL_id');

        $this->load->model('sell_model');
        $query = $this->sell_model->delete($SELL_id);
        if ($query) {
            echo "success";
        }else{
            echo "fail";
        }
    }

    public function con_buy(){
        $con_id=$this->input->post("con_id");
        $flag=1;/*表示关注买房源*/
        $uid=$this->session->userdata('id');
        $this->load->model('sell_model');
        $result=$this->sell_model->add_con($con_id,$uid,$flag);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }
    public function delete_con_buy(){
        $con_id=$this->input->post("con_id");
        $flag=1;/*表示关注买房源*/
        $uid=$this->session->userdata('id');
        $this->load->model('sell_model');
        $result=$this->sell_model->delete_con($con_id,$uid,$flag);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }

}
?>

