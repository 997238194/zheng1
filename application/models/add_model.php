<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class add_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
//    public function getAll(){
//        $query=$this->db->query("select * from sell");
//        return $query->result();
//    }
//添加插入sell数据库信息
    public function insert($uid,$SELL_name,$SELL_telephone,$SELL_title,$SELL_price,$SELL_type,$SELL_address,$SELL_area,
                           $SELL_time,$SELL_height,$SELL_oriention,$SELL_fitment,$SELL_character,$img){
//        var_dump($SELL_title);
//        die();
        $query=$this->db->query("insert into sell(SELL_id,uid,SELL_name,SELL_telephone,SELL_title,SELL_price,SELL_type,SELL_address,
SELL_area,SELL_time,SELL_height,SELL_oriention,SELL_fitment,SELL_character,img) values
(null,'$uid','$SELL_name','$SELL_telephone','$SELL_title','$SELL_price','$SELL_type','$SELL_address','$SELL_area','$SELL_time','$SELL_height','$SELL_oriention','$SELL_fitment','$SELL_character','$img')");
//        var_dump('query');
//        die();
        return $query;
    }
    //添加插入rent数据库信息
    public function inserts($uid,$RENT_name,$RENT_telephone,$RENT_title,$RENT_price,$RENT_type,$RENT_address,$RENT_area,$RENT_time,
                           $RENT_height,$RENT_price_method,$RENT_oriention,$RENT_fitment,$RENT_character,$img){
//        var_dump($SELL_title);
//        die();
        $query=$this->db->query("insert into rent(RENT_id,uid,RENT_name,RENT_telephone,RENT_title,RENT_price,RENT_type,
RENT_address,RENT_area,RENT_time,RENT_height,RENT_price_method,RENT_oriention,RENT_fitment,RENT_character,img)
 values (null,'$uid','$RENT_name','$RENT_telephone','$RENT_title','$RENT_price','$RENT_type','$RENT_address','$RENT_area','$RENT_time',
 '$RENT_height','$RENT_price_method','$RENT_oriention','$RENT_fitment','$RENT_character','$img')");
//        var_dump('query');
//        die();
        return $query;
    }
}