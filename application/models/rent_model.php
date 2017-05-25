<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class rent_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_sell(){
        $query=$this->db->query("select * from sell limit 0,6");

        return $query->result();
    }
    public function get_rent(){
        $query=$this->db->get("rent");

        return $query->result();
    }
    public function get_rents($rent_id){

        $query=$this->db->query("select * FROM rent WHERE RENT_id = $rent_id");

        return $query->result();
    }

    public function delete($RENT_id){

        $query=$this->db->query("delete from rent where RENT_id='$RENT_id'");
        return $query;
    }
    public function add_con($con_id,$uid,$flag){

        $query=$this->db->query("insert into con(own_id,con_id,uid,flag) values(null,'$con_id','$uid','$flag');");

        return $query;
    }
    public function delete_con($con_id,$uid,$flag){

        $query=$this->db->query("delete from con where con_id='$con_id' and uid='$uid' and flag='$flag'");

        return $query;
    }
    public function check_con($rent_id,$uid,$flag){
        $query=$this->db->query("select * from con where con_id='$rent_id' and flag='$flag' and uid='$uid'");

        return $query->row();
    }
}