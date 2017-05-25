<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class agent_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function agent(){
        $query=$this->db->query("select * FROM sell ");

        return $query->result();
    }
    public function agents($id){
        $query=$this->db->query("select * FROM sell where SELL_id='$id';");

        return $query->result();
    }
    public function rentagent(){
        $query=$this->db->query("select * FROM rent ");

        return $query->result();
    }
    public function rentagents($id){
        $query=$this->db->query("select * FROM rent where RENT_id='$id';");

        return $query->result();
    }
}