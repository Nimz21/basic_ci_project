<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilepic extends CI_Model {

	public function change($vl)
	{
        
        $bck=$this->db->query("select * from user_profile where uid='$vl'");
        return $bck;
	}
}
