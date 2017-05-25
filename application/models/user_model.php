<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  //注册
    public function get_insert($email,$keyword){
//        $query=$this->db->query("select id from agent where email='$email'");
//        $num = mysql_num_rows($query);
//        if($num==1){
//            echo '<script>alert("用户名已存在，请换个其他的用户名");window.history.go(-1);</script>';
//            exit;
//        }
        $query=$this->db->query("insert into agent(email,keyword) VALUES ('$email','$keyword')");
       return $query;

    }


    public function get_forget($email,$keyword){

//        $query=$this->db->query("select count(*) from agent where email='$email'");
//
////        $num = mysqli_fetch_array($query);

//        if($num==0){
//            echo '<script>alert("用户名不存在，请换个正确的用户名");window.history.go(-1);</script>';
//            exit;
//        }
        $query=$this->db->query("update agent set keyword='$keyword' where  email='$email'");
        return $query;

    }
    public function get_check($email){
        $query=$this->db->get_where('agent',array('email'=>$email));

        return $query->row();
    }
    //登录
    public function get_select($email,$keyword){
       $sql="select * from agent where email='$email' and keyword='$keyword'";
        $query=$this->db->query($sql);
        return $query->row();
    }
}
?>