<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('add_model');
    }
    //跳转到发布租房页面
    public function addrent(){
            $this->load->view('add-rent.php');
        }
    //跳转到发布卖房页面
    public function addsell(){
        $this->load->view('add-sale.php');
    }

    //读主页内容，插入数据库sell
    public function insert(){
//        var_dump('SELL_title');
//        die();
        $uid=$this->session->userdata('id');
        $imgfile = $_FILES['img'];
        $imgname = $imgfile['name'];
        $imgarr = explode('.', $imgname);
        $lastvalue = count($imgarr) - 1;
        $houname = $imgarr[$lastvalue];
        $flag = false;
        $allowed_types = array('jpg', 'png', 'ico', 'JPG');
        for ($i = 0; $i < count($allowed_types); $i++) {
            if ($allowed_types[$i] == $houname) {
                $flag = true;
            }
        }

        if ($flag == false) {
            echo "<script>alert('上传文件后缀名非法');</script>";
            redirect("rent/index");
        } else {
            $filename = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $houname;
            $path = getcwd() . '/uploads/' . $filename;
            $upload_flag = move_uploaded_file($imgfile['tmp_name'], $path);
            /*图片上传的时候，先存在C/XAMPP/TMP文件夹里的缓存中,只有调用方法才会
            移动到项目的目标文件夹，此方法是PHP原生提供的方法，返回移动的结果bool类型*/
            if ($upload_flag) {
                $img = 'uploads/' . $filename;
                $SELL_name=$this->input->post("SELL_name");
                $SELL_telephone=$this->input->post("SELL_telephone");
                $SELL_title=$this->input->post("SELL_title");
                $SELL_price=$this->input->post("SELL_price");
                $SELL_type=$this->input->post("SELL_type");
                $SELL_address=$this->input->post("SELL_address");
                $SELL_area=$this->input->post("SELL_area");
                $SELL_time=$this->input->post("SELL_time");
                $SELL_height=$this->input->post("SELL_height");
                $SELL_oriention=$this->input->post("SELL_oriention");
                $SELL_fitment=$this->input->post("SELL_fitment");
                $SELL_character=$this->input->post("SELL_character");
                $this->load->model('add_model');
                $query=$this->add_model->insert($uid,$SELL_name, $SELL_telephone,
                    $SELL_title,$SELL_price,$SELL_type,$SELL_address,$SELL_area,
                    $SELL_time,$SELL_height,$SELL_oriention,$SELL_fitment,
                    $SELL_character,$img);
                if ($query) {
                    redirect("rent/index");
                }
            } else {
                echo "请上传小于2M的图片";
            }
        }


    }

    //读主页内容，插入数据库rent
    public function inserts(){
//        var_dump('SELL_title');
//        die();
        $uid=$this->session->userdata('id');
        $imgfile = $_FILES['img'];
//        var_dump($imgfile);
//        die();
        $imgname = $imgfile['name'];
        $imgarr = explode('.', $imgname);
        $lastvalue = count($imgarr) - 1;
        $houname = $imgarr[$lastvalue];
        $flag = false;
        $allowed_types = array('jpg', 'png', 'ico', 'JPG');
        for ($i = 0; $i < count($allowed_types); $i++) {
            if ($allowed_types[$i] == $houname) {
                $flag = true;
            }
        }

        if ($flag == false) {
            echo "<script>alert('上传文件后缀名非法');</script>";
            redirect("rent/index");
        } else {
            $filename = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $houname;
            $path = getcwd() . '/uploads/' . $filename;
            $upload_flag = move_uploaded_file($imgfile['tmp_name'], $path);
            /*图片上传的时候，先存在C/XAMPP/TMP文件夹里的缓存中,只有调用方法才会
            移动到项目的目标文件夹，此方法是PHP原生提供的方法，返回移动的结果bool类型*/
            if ($upload_flag) {
                $img = 'uploads/' . $filename;
//                $result = $this->add_model->inserts($img);
                $RENT_name=$this->input->post("RENT_name");
                $RENT_telephone=$this->input->post("RENT_telephone");
                $RENT_title=$this->input->post("RENT_title");
                $RENT_price=$this->input->post("RENT_price");
                $RENT_type=$this->input->post("RENT_type");
                $RENT_address=$this->input->post("RENT_address");
                $RENT_area=$this->input->post("RENT_area");
                $RENT_time=$this->input->post("RENT_time");
                $RENT_height=$this->input->post("RENT_height");
                $RENT_price_method=$this->input->post("RENT_price_method");
                $RENT_oriention=$this->input->post("RENT_oriention");
                $RENT_fitment=$this->input->post("RENT_fitment");
                $RENT_character=$this->input->post("RENT_character");
                $this->load->model('add_model');
                $query=$this->add_model->inserts($uid,$RENT_name,$RENT_telephone,
                    $RENT_title,$RENT_price,$RENT_type,$RENT_address,$RENT_area,
                    $RENT_time,$RENT_height,$RENT_price_method,$RENT_oriention,
                    $RENT_fitment,$RENT_character,$img);
                if ($query) {
                    redirect("rent/index");
                }
            } else {
                echo "请上传小于2M的图片";
            }
        }

    }
}