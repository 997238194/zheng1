<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Publish extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
//修改删除查数据库商品卖房
    public function publishedit()
    {
        $sell_id=$this->uri->segment(3);
        $this->load->model('publish_model');
        $sellrs = $this->publish_model->get_sells($sell_id);
        $arr['v'] = $sellrs;

        $this->load->view('publish-edit.php', $arr);
    }
    //租房
    public function publishedits()
    {
        $rent_id=$this->uri->segment(3);
        $this->load->model('publish_model');
        
        $rentrs = $this->publish_model->get_rents($rent_id);
        $arr['rent'] = $rentrs;

        $this->load->view('publish-edits.php', $arr);
    }
//查询商品页面
    public function publishs()
    {
        $id=$this->session->userdata('id');
        $this->load->model('publish_model');
        $sellrs = $this->publish_model->get_sell($id);
        $rentrs = $this->publish_model->get_rent($id);

        $arr['sell'] = $sellrs;
        $arr['rent'] = $rentrs;
        $this->load->view('publish.php', $arr);



    }


//卖房修改
    public function update()
    {

        $sell_id=$this->uri->segment(3);

        $SELL_name = $this->input->post("SELL_name");
        $SELL_telephone = $this->input->post("SELL_telephone");
        $SELL_title = $this->input->post("SELL_title");
        $SELL_price = $this->input->post("SELL_price");
        $SELL_type = $this->input->post("SELL_type");
        $SELL_address = $this->input->post("SELL_address");
        $SELL_area = $this->input->post("SELL_area");
        $SELL_time = $this->input->post("SELL_time");
        $SELL_height = $this->input->post("SELL_height");
        $SELL_oriention = $this->input->post("SELL_oriention");
        $SELL_fitment = $this->input->post("SELL_fitment");
        $SELL_character = $this->input->post("SELL_character");
        $this->load->model('publish_model');
        $query = $this->publish_model->update($sell_id, $SELL_name,$SELL_telephone,$SELL_title, $SELL_price, $SELL_type, $SELL_address, $SELL_area, $SELL_time, $SELL_height, $SELL_oriention, $SELL_fitment, $SELL_character);
//        var_dump($sell_id);
//        die();
        if ($query) {
            redirect('publish/publishs');
//            die();
        }
    }
    //租房修改
    public function updates()
    {
        $rent_id=$this->uri->segment(3);

        $RENT_name = $this->input->post("RENT_name");
        $RENT_telephone = $this->input->post("RENT_telephone");
        $RENT_title = $this->input->post("RENT_title");
        $RENT_price = $this->input->post("RENT_price");
        $RENT_type = $this->input->post("RENT_type");
        $RENT_address = $this->input->post("RENT_address");
        $RENT_area = $this->input->post("RENTSELL_area");
        $RENT_time = $this->input->post("RENT_time");
        $RENT_price_method = $this->input->post("RENT_price_method");
        $RENT_height = $this->input->post("RENT_height");
        $RENT_oriention = $this->input->post("RENT_oriention");
        $RENT_fitment = $this->input->post("RENT_fitment");
        $RENT_character = $this->input->post("RENTSELL_character");
        $this->load->model('publish_model');
        $query = $this->publish_model->updates($rent_id,$RENT_name,$RENT_telephone, $RENT_title, $RENT_price, $RENT_type,
            $RENT_address, $RENT_area, $RENT_time, $RENT_height,$RENT_price_method,$RENT_oriention,
            $RENT_fitment, $RENT_character);
//var_dump($rent_id);die();
        if ($query) {
            redirect('publish/publishs');
//            die();
        }
    }
}