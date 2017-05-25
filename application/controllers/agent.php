<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agent extends CI_Controller
{
    public function __controller()
    {
        parent::__construct();
    }

    public function member()
    {
        $status=0;
        if($this->session->userdata('id')){
            $status=1;
        }
        $arr["status"]=$status;
        $this->load->view('member.php',$arr);

    }

    public function agents()
    {

        $this->load->model('agent_model');
        $sellrs = $this->agent_model->agent();
        $arr['agent'] = $sellrs;

        $sellrs = $this->agent_model->rentagent();
        $arr['agents'] = $sellrs;

        $this->load->view('agent.php', $arr);
    }

    public function agentdetail()
    {
        $id=$this->uri->segment(3);

        $this->load->model('agent_model');
        $sellrs = $this->agent_model->agents($id);
        $arr['agent'] = $sellrs;

        $this->load->view('agentdetail', $arr);
    }


//    public function rentagents()
//    {
//
//
//
//        $this->load->view('agent.php', $arr);
//    }

    public function rentagentdetail()
    {
        $id=$this->uri->segment(3);

        $this->load->model('agent_model');
        $sellrs = $this->agent_model->rentagents($id);
        $arr['agents'] = $sellrs;

        $this->load->view('agentdetails', $arr);
    }


}
?>