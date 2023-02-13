<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('index.php');
		$this->load->view('footer.php');
	}
	public function about()
	{
		$this->load->view('header.php');
		$this->load->view('about.php');
		$this->load->view('footer.php');
	}
	public function agenda()
	{
		$this->load->view('header.php');
		$this->load->view('agenda.php');
		$this->load->view('footer.php');
	}
	public function collaboration()
	{
		$this->load->view('header.php');
		$this->load->view('collaboration.php');
		$this->load->view('footer.php');
	}
	public function downloads()
	{
		$this->load->view('header.php');
		$this->load->view('downloads.php');
		$this->load->view('footer.php');
	}
	public function registrations()
	{
		$this->load->view('header.php');
		$this->load->view('registrations.php');
		$this->load->view('footer.php');
	}
	public function venue()
	{
		$this->load->view('header.php');
		$this->load->view('venue.php');
		$this->load->view('footer.php');
		
	}
	public function login()
	{
		$this->load->view('login.php');
	}
	public function login_process()
   {
     if($this->input->post('u_login'))
      {
        $u_name=$this->input->post('u_name');
        $u_pass=md5($this->input->post('u_password'));
        $u_data=array('u_name'=>$u_name,'u_pass'=>$u_pass);
        $users_list=$this->db->get_where('users',array('email'=>$u_data['u_name'],'user_status'=>1));
        if($users_list->num_rows()>0)
			{
			foreach($users_list->result() as $users)
			{
				if($u_data['u_name']==$users->email && $u_data['u_pass']==$users->password)
				{
				$_SESSION['u_id']=$u_data['u_name'];
				$_SESSION['role']=$users->role;
				redirect('Super_admin','refresh');  
				}
				else
				{
				$this->session->set_flashdata('invalid_user',"failed");
				redirect('Home/login','refresh');
				}
			}
			}
        else
            {
              $this->session->set_flashdata('invalid_user',"failed");
              redirect('Home/login','refresh');
            }
      }
   }
}
