<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

	
	public function create()
	{
		$this->load->view('create_account');
	}

	public function create2()
	{
		$this->load->view('create_account2');
	}

	public function create3()
	{
		$this->load->view('create_account3');
	}

	public function create4()
	{
		$this->load->view('create_account4');
	}

	public function sign_in()
	{
		$this->load->view('login');
	}

	public function profile()
	{
		$this->load->view('user_profile');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard_admin');
	}

}
?>
