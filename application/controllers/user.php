<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
      public function indexs(){

   }
    //登录
    public function login(){
    $this->load->view('login.php');

    }
    public function delete_login(){
        $array_items = array('id', 'name');
        $this->session->unset_userdata($array_items);
        $status=0;
        if($this->session->userdata('id')){
            $status=1;
        }
        $arr["status"]=$status;
        $this->load->view('member.php',$arr);
    }
    public function do_login(){
        $email = $this->input->post('username');
        $keyword = $this->input->post('password');
//        $_SESSION['id']=$arr->id;
//        $_SESSION['name']=$arr->email;
        $rs = $this->user_model->get_select($email,$keyword);
         if($rs){
                $arr  = array(
                    'id' =>$rs->id,
                    'name'=>$rs->email
                );
             $this->session->set_userdata($arr);

             redirect('rent/index');
         }else{
             redirect('user/login');
         }
    }
    public function checkname(){
        header("Access-Control-Allow-Origin:*");
        $email=$this->input->post('email');

        $rs=$this->user_model->get_check($email);

        //echo "success";
        if($rs){
            echo "success";
        }
    }

    //注册
      public function reg(){
        $this->load->view('reg.php');
    }
      public function do_reg(){
          $email = $this->input->post('username');
          $keyword = $this->input->post('password');

//          $arr = array(
//              'email' => $email,
//              'keyword' => $keyword,
//
//          );

         $rs = $this->user_model->get_insert($email,$keyword);
//          console.log($keyword);
//          die();
          if($rs){
              echo '<script>alert("注册成功");window.history.go(-1);</script>';
              redirect("user/login?");
          }else{
              redirect("user/reg");
          }

      }

 //忘记
    public function forget(){
        $this->load->view('forget.php');
    }

    public function do_forget(){
        $email = $this->input->post('username');
        $keyword = $this->input->post('password');
        $keywords = $this->input->post('passwords');
//        $arr = array(
//            'email' => $email,
//            'keyword' => $keyword,
//
//        );
        if($keyword ==$keywords){
            echo '<script>alert("正确");window.history.go(-1);</script>';

            $rs = $this->user_model->get_forget($email,$keyword);

            if($rs){
                redirect("user/login");
            }else{
                redirect("user/forget");
            }

        }else{
            echo '<script>alert("您输入的俩次密码不一致");window.history.go(-1);</script>';
        }


    }
    public function checknames(){
        $email=$this->input->post('email');

        $rs=$this->user_model->get_check($email);

        //echo "success";
        if($rs){
            echo "success";
        }
    }

}







    ?>