<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincheck extends CI_Model {

	
	public function login($value)
	{   
        $n=$value['name'];
        $p=$value['pass'];
        $rt=$this->db->query("select * from register where username='$n' and password='$p'");
        return $rt;
	}
}
