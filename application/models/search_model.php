<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class search_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function searchs($text1,$text2,$text3,$text4){
        $sql="select * from sell where ";
        if($text1!='不限'&&$text1!='区域'){
            $sql.="SELL_address like '%$text1%' and ";
        }
        if($text2!='不限'&&$text2!='价格'){
            if(strpos($text2,'以上')){
                $text2=substr($text2,0,mb_strlen($text2)-3);
                $sql.="SELL_price >= $text2 and ";
            }else if(strpos($text2,'以下')){
                $text2=substr($text2,0,mb_strlen($text2)-3);
                $sql.="SELL_price < $text2 and ";
            }else if(strpos($text2,'-')){
                $text2=substr($text2,0,mb_strlen($text2)-1);
                $text2=explode("-",$text2);
                $first_arr=$text2[0];
                $secon_arr=$text2[1];
                $sql.="SELL_price > $first_arr and SELL_price < $secon_arr and ";
            }



        }
        if($text3!='不限'&&$text3!='房型'){
            $sql.="SELL_type like '%$text3%' and ";
        }
        if($text4!='不限'&&$text4!='朝向'){
            $sql.="SELL_oriention like '%$text4%' and ";
        }
        
        $sql=substr($sql,0,strlen($sql)-5);

        $query=$this->db->query("$sql");
        return $query->result();
    }





    public function searches($text1,$text2,$text3,$text4){
        $sql="select * from rent where ";
        if($text1!='不限'&&$text1!='区域'){
            $sql.="RENT_address like '%$text1%' and ";
        }
        if($text2!='不限'&&$text2!='价格'){
            if(strpos($text2,'以上')){
                $text2=substr($text2,0,mb_strlen($text2)-3);
                $sql.="RENT_price >= $text2 and ";
            }else if(strpos($text2,'以下')){
                $text2=substr($text2,0,mb_strlen($text2)-3);
                $sql.="RENT_price < $text2 and ";
            }else if(strpos($text2,'-')){
                $text2=substr($text2,0,mb_strlen($text2)-1);
                $text2=explode("-",$text2);
                $first_arr=$text2[0];
                $secon_arr=$text2[1];
                $sql.="RENT_price > $first_arr and RENT_price < $secon_arr and ";
            }



        }
        if($text3!='不限'&&$text3!='房型'){
            $sql.="RENT_type like '%$text3%' and ";
        }
        if($text4!='不限'&&$text4!='朝向'){
            $sql.="RENT_oriention like '%$text4%' and ";
        }

        $sql=substr($sql,0,strlen($sql)-5);

        $query=$this->db->query("$sql");
        return $query->result();
    }
    public function searchinput($text1){
        $sql="select * from sell where SELL_title like '%$text1%' or SELL_address LIKE '%$text1%'";



        $query=$this->db->query("$sql");
        return $query->result();
    }


    public function searchsell($text1){
        $sql="select * from sell where SELL_title like '%$text1%' or SELL_address LIKE '%$text1%'";



        $query=$this->db->query("$sql");
        return $query->result();
    }
    public function searchrent($text1){
        $sql="select * from rent where RENT_title like '%$text1%' or RENT_address LIKE '%$text1%'";



        $query=$this->db->query("$sql");
        return $query->result();
    }


    public function search(){
        $query=$this->db->query("select * FROM search;");

        return $query->result();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}