<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();

	
	}

	//guestbook creation
	public function index()
	{
		$this->load->view('viewheader');
		$this->load->view('viewfooter');
		
	}

	
}
