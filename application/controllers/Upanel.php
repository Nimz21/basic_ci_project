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
        public function add_details($u_id)
        { 
                $data['names']=$u_id;
        $this->load->view('profile',$data);
        }
        public function addbck()
        {
         
                if($_FILES)
		{
		$config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg/';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        die('error');
                        //$this->load->view('upload_form', $error);
                }
                else
                {
						$data = array('upload_data' => $this->upload->data());
						//echo "<pre>";
						//print_r($data);
						//echo $data['upload_data']['file_name'];
						//$this->load->view('upload_success', $data);
						$file_name="assets/images/".$data['upload_data']['file_name'];
						$u_dob=$_POST['dob'];
                                                $u_add=$_POST['address'];
                                                $useid=$_POST['uname'];
                                                
                                                $dt['udob']=$u_dob;
                                                $dt['uadd']=$u_add;
                                                $dt['uproof']=$file_name;
                                                $dt['uid']=$useid;
                                                $this->load->model('details');
                                                $qry=$this->details->add($dt);
						if($qry)
					         {
                                                   $this->session->set_flashdata("inserted","yes");
						   redirect('upanel');
					         }
					   else{
						$this->session->set_flashdata("inserted","no"); 
					   }
					}
				
		}
        }
        public function edit($u)
        {
        
         $qry=$this->db->query("select * from user_details where uid='$u'");
         $result['val']=$qry->result_array();
         if($result['val'])
         {
         
         $this->load->view('editpage',$result);
        }
        else{
          $this->session->set_flashdata("Add First",'no');
        
          $this->load->view('addfirst');

        }
        }
        public function editbck($id)
        {
         
         if($_FILES)
         {
         $config['upload_path']          = './assets/images/';
         $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
         

         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('file'))
         {
                 $error = array('error' => $this->upload->display_errors());
                 die('error');
                 //$this->load->view('upload_form', $error);
         }
         else
         {
                                         $data = array('upload_data' => $this->upload->data());
                                         //echo "<pre>";
                                         //print_r($data);
                                         //echo $data['upload_data']['file_name'];
                                         //$this->load->view('upload_success', $data);
                                         $file_name="assets/images/".$data['upload_data']['file_name'];
                                         $u_dob=$_POST['dob'];
                                         $u_add=$_POST['address'];
                                         
                                         
                                         
                                         $qry=$this->db->query("update user_details set dob='$u_dob', address='$u_add',idproof='$file_name' where uid='$id'");
                                         if($qry)
                                          {
                                            $this->session->set_flashdata("updated","yes");
                                            redirect('upanel');
                                          }
                                    else{
                                         $this->session->set_flashdata("updated","no"); 
                                    }
                                 }
                         
         }
        }
        public function addpic($uid)
        {
        $val['name']=$uid;
        //print_r($val); die();
        $this->load->view('profile_pic',$val);
        }
        public function profilebck($n)
        {
                
                if($_FILES)
		{
		$config['upload_path']          = './assets/images/profile/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('filetwo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        die('error');
                        //$this->load->view('upload_form', $error);
                }
                else
                {
						$data = array('upload_data' => $this->upload->data());
						//echo "<pre>";
						//print_r($data);
						
                                                $file_name="assets/images/profile/".$data['upload_data']['file_name'];
                                        
                                                $ide=$_POST['id'];
                                                $dt['pic']=$file_name;
                                                $dt['puid']=$n;
                                                
                                                //$dt['uid']=$ide;
                                                $this->load->model('photo');
                                                $qry=$this->photo->pic($dt);
						if($qry)
					         {
						   $this->session->set_flashdata("inserted","yes");
						   redirect('upanel');
					         }
					   else{
						$this->session->set_flashdata("inserted","no"); 
					   }
					}
				
		}
        }
        public function changepic($n)
        {
        
        $this->load->model('profilepic');
        
        $re=$this->profilepic->change($n);
        
        $val['pic']=$re->result_array();
        if($val['pic']){
       
        $this->load->view('changepicture',$val);
        }
        else{
                $this->session->set_flashdata("Add your picture",'no');
                $this->load->view('addpic');
        }
        }
        public function changebck($n)
        {
                if($_FILES)
		{
		$config['upload_path']          = './assets/images/profile/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('filetwo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        die('error');
                        //$this->load->view('upload_form', $error);
                }
                else
                {
						$data = array('upload_data' => $this->upload->data());
						//echo "<pre>";
						//print_r($data);
						//echo $data['upload_data']['file_name'];
						//$this->load->view('upload_success', $data);
						$file_name="assets/images/profile/".$data['upload_data']['file_name'];
                                                $qry=$this->db->query("update user_profile set profile_pic='$file_name' where uid='$n'");
                                                
						if($qry)
					         {
						   $this->session->set_flashdata("inserted","yes");
						   redirect('upanel');
					         }
					   else{
						$this->session->set_flashdata("inserted","no"); 
					   }
					}
				
		}
        
        }
        public function status($uid)
        {
                
                $re=$this->db->query("select * from approve where uid='$uid'");
        
                $data=$re->result_array();
                
                if($data)
                {
                $this->load->view('viewstatus',$data);
                }
                else{
                $this->load->view('rejection');
                }
                
                
        }
}

