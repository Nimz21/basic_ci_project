<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Model{


	public function add($val)
	{
        $dob=$val['udob'];
        $add=$val['uadd'];
        $idproof=$val['uproof'];
        $userid=$val['uid'];
        $bck=$this->db->query("insert into user_details(dob,address,idproof,uid)values('$dob','$add','$idproof','$userid')");
        return $bck; 
	}
}
