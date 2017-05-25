<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class publish_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($SELL_title,$SELL_price,$SELL_type,$SELL_address,$SELL_area,
                           $SELL_time,$SELL_height,$SELL_oriention,$SELL_fitment,$SELL_character){

        $query=$this->db->query("insert into sell(SELL_id,SELL_title,SELL_price,SELL_type,SELL_address,
SELL_area,SELL_time,SELL_height,SELL_oriention,SELL_fitment,SELL_character) values
(null,'$SELL_title','$SELL_price','$SELL_type','$SELL_address','$SELL_area','$SELL_time','$SELL_height','$SELL_oriention','$SELL_fitment','$SELL_character')");

        return $query;
    }
    //查询个人发布修改页数据库卖房
    public function get_sell($id){
        $query=$this->db->query("select * FROM sell WHERE uid = '$id'");

        return $query->result();

    }
    public function get_rent($id){
        $query=$this->db->query("select * FROM rent WHERE uid = '$id'");

        return $query->result();
    }
    //修改发布唯一的卖房信息
    public function get_sells($sell_id){
        $query=$this->db->query("select * FROM sell WHERE SELL_id='$sell_id'");

        return $query->row();
    }
    public function get_rents($rent_id){
        $query=$this->db->query("select * FROM rent WHERE RENT_id ='$rent_id';");

        return $query->result();
    }
//修改卖房信息
    public function update($sell_id,$SELL_name,$SELL_telephone,$SELL_title,$SELL_price,$SELL_type,$SELL_address,$SELL_area,$SELL_time,
                           $SELL_height,$SELL_oriention,$SELL_fitment,$SELL_character){
        $query=$this->db->query("update sell set SELL_name='$SELL_name',SELL_telephone='$SELL_telephone',
        SELL_title='$SELL_title',SELL_price='$SELL_price',SELL_type='$SELL_type',SELL_address='$SELL_address',
        SELL_area='$SELL_area',SELL_time='$SELL_time',SELL_height='$SELL_height',SELL_oriention='$SELL_oriention'
        ,SELL_fitment='$SELL_fitment',SELL_character='$SELL_character' where SELL_id='$sell_id'");
        return $query;
    }
    //修改租房信息
    public function updates($rent_id,$RENT_name,$RENT_telephone,$RENT_title,$RENT_price,$RENT_type,$RENT_address,$RENT_area,$RENT_time,
                           $RENT_height,$RENT_price_method,$RENT_oriention,$RENT_fitment,$RENT_character){
        $query=$this->db->query("update rent set RENT_name='$RENT_name',RENT_telephone='$RENT_telephone',
        RENT_title='$RENT_title',RENT_price='$RENT_price',RENT_type='$RENT_type',RENT_address='$RENT_address',
        RENT_area='$RENT_area',RENT_time='$RENT_time',RENT_height='$RENT_height',RENT_price_method='$RENT_price_method', RENT_oriention='$RENT_oriention'
        ,RENT_fitment='$RENT_fitment',RENT_character='$RENT_character' where RENT_id='$rent_id'");
        return $query;
    }
}