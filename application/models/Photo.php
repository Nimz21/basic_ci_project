<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Model {

	
	public function pic($val)
	{
        $picture=$val['pic'];
        $id=$val['puid'];
        $bck= $this->db->query("insert into user_profile(uid,profile_pic)values('$id','$picture')");
        return $bck;
	}
}
