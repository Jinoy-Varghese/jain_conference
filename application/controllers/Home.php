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
}
