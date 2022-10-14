<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
		$this->load->view('headers/header_user');
        $this->load->view('loader/loader');
		$this->load->view('users/login');
		$this->load->view('footers/user_footer');
	}




	
}
