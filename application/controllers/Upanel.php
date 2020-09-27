<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upanel extends CI_Controller {

	public function index()
	{
        if(isset($_SESSION['user']))
        {
         
         
         $this->load->view('head/userdashboard');
        }
        }
        public function add_details()
        {
             
        $this->load->view('profile');
        }
}

