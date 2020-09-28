<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('adminlogin');
    }
    public function adminbck()
    {   
    
        $a_name=$_POST['adname'];
        $a_pass=$_POST['apswd'];
        $qry=$this->db->query("select * from admin_login where username='$a_name' and password='$a_pass'");
        $re['value']=$qry->result_array();
        
        $this->session->set_userdata('admin',$a_name);
        
        $this->load->view('adminpage');
    
        
    }
    function main()
    {
        $this->load->view('mainpage');
    }
    
	function logout()
    {
        $this->session->sess_destroy();
        
        redirect('admin');
    }
    function view_users()
    {
        $this->load->model('users');
        $result=$this->users->list();
        $data['users']=$result->result_array();
        $this->load->view('viewallusers',$data);
    }
    function more($id,$userid)
    {
        $this->load->model('moredetails');
        $result=$this->moredetails->viewall($userid);
       $data['more']=$result->result_array();
       $data['id']=$id;
       $data['name']=$userid;
        $this->load->view('aboutuser',$data);
    }
    public function approve($uid)
    {   
        $result=$this->db->query("select * from approve where uid='$uid'");
        $rcount=$result->num_rows();
        
        if($rcount == 1)
        {
            echo "user already approved";
        }
        else{
        $qry=$this->db->query("insert into approve(uid)values('$uid')");
          }
        redirect('admin/view_users');
    }
    public function reject($uid)
    {   
        $result=$this->db->query("select * from approve where uid='$uid'");
        $rcount=$result->num_rows();
        
        if($rcount == 1)
        {
            $qry=$this->db->query("delete from approve where uid='$uid'");
        }
        else{
            echo "already rejected";
          }
        redirect('admin/view_users');
    }
}
