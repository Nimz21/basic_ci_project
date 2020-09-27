<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	 $this->load->view('loginview');
	}
	public function check()
	{
		//print_r($_POST);
		if(isset($_POST))
		{
			$u_name=$_POST['uname'];
			$password=$_POST['password'];
			$data['name']=$u_name;
			$data['pass']=$password;
			//print_r($data);
			//die();
			$this->load->model('logincheck');
            $back=$this->logincheck->login($data);
			if($back->num_rows())
			{
				$res=$back->result_array();
				$this->session->set_userdata('user',$res[0]['id']);
				$this->session->set_userdata('name',$res[0]['username']);
		        redirect('upanel');
		    }
			else{

			 $this->session->set_flashdata('error','Invalid Credentials');
			 redirect('login');
		    }
		}
		else{
			die('Invalid input');
		    }
	}
	
    public function user_reg()
    {
	 $this->load->view('registration');
	}
	public function reg_bck()
    {
		//print_r($_POST);
		$uname=$_POST['username'];
		$name=$_POST['fullname'];
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$qry=$this->db->query("insert into register(username,fullname,password,email)values('$uname','$name','$pass','$email')");
	    redirect('login');
	}
	function logout()
     {
		 session_destroy();
		 redirect('login');
	 }
    
}
