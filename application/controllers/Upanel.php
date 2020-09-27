<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upanel extends CI_Controller {

	public function index()
	{
        if(isset($_SESSION['user']))
        {
         $name['n']=$_SESSION['name'];
         
         $this->load->view('userpanel',$name);
        }
        }
        public function adddetails()
        {
                echo 'add';
        }
}

