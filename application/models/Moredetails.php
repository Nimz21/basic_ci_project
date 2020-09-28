<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moredetails extends CI_Model {

	
	public function viewall($n1)
	{
        $qry=$this->db->query("select * from user_details where uid='$n1'");
        return $qry;
	}
}
