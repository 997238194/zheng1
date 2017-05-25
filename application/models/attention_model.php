<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class attention_model extends CI_Model
{
   public function get_all_buy($uid){
       $sql="select * from con,sell where con.con_id=sell.SELL_id and con.uid='$uid' and con.flag='1'";
       $query=$this->db->query($sql);
       return $query->result();
   }
    public function get_all_rent($uid){
        $sql="select * from con,rent where con.con_id=rent.RENT_id and con.uid='$uid' and con.flag='0'";
        $query=$this->db->query($sql);
        return $query->result();
    }
}