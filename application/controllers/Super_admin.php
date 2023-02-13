<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/index.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function about()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/about.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function agenda()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/agenda.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function collaboration()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/collaboration.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function downloads()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/downloads.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function registration()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/registration.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function venue()
	{
		$this->load->view('super_admin/dash_header.php');
		$this->load->view('super_admin/venue.php');
		$this->load->view('super_admin/dash_footer.php');
	}
	public function update_content_process()
	{
		if($this->input->post('update_cont'))
		{
			$id=$this->input->post('id');; 
			$head=$this->input->post('head');
			$para=$this->input->post('para');

			
			$update_data=array('heading'=>$head,'paras'=>$para);
			$this->db->where('id',$id)->update('contents',$update_data);

			
			$this->session->set_flashdata('update_success',"Successfully Updated");
			redirect('Super_admin/','refresh');
		}
		else
		{
			$this->session->set_flashdata('update_failed',"Updation Failed");
			redirect('Super_admin/','refresh');
		}
	}
	
	
}
