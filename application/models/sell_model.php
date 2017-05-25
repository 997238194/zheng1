<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sell_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_sell(){
        $query=$this->db->get("sell");

        return $query->result();
    }
    public function get_sells($sell_id){
        $query=$this->db->query("select * FROM sell WHERE SELL_id ='$sell_id'");

        return $query->row();
    }
    public function delete($SELL_id){

        $query=$this->db->query("delete from sell where SELL_id='$SELL_id'");
        return $query;
    }
    public function add_con($con_id,$uid,$flag){
        $query=$this->db->query("insert into con(own_id,con_id,uid,flag) values(null,'$con_id','$uid','$flag');");

        return $query;
    }
    public function delete_con($con_id,$uid,$flag){
        $query=$this->db->query("delete from con where uid='$uid' and con_id='$con_id' and flag='$flag'");

        return $query;
    }
    public function check_con($sell_id,$uid,$flag){
        $query=$this->db->query("select * from con where con_id='$sell_id' and flag='$flag' and uid='$uid'");

        return $query->row();
    }
}