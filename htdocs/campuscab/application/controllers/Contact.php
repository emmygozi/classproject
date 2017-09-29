<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();

		$this->load->model('model_contact');
	}

	//guestbook creation
	public function index()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('lastname', 'Last name', 'required|trim');
		$this->form_validation->set_rules('firstname', 'First name', 'required|trim|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('emailaddress', 'Email Address', 'required|trim|is_unique[guestbook.emailaddress]');
		$this->form_validation->set_message('is_unique', 'The Email Address does not exist!');

		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('guestbook');
                }
                else
                {
                	//call database
                        $this->model_contact->add_guest();
                }
	}

	public function displayguest(){
		$data['guestinfo'] = $this->model_contact->get_guest();
		$this->load->view('displayguest', $data);
	}

	public function editguest($id){
		$data['guestrecord'] = $this->model_contact->get_guest_record($id);

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('lastname', 'Last name', 'required|trim');
		$this->form_validation->set_rules('firstname', 'First name', 'required|trim|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('emailaddress', 'Email Address', 'required|trim');
	//$this->form_validation->set_message('is_unique', 'The Email Address does not exist!');

		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('editguestbook', $data);
                }
                else
                {
                	//call database
                        $this->model_contact->update_guest($id);
                }
	}

	public function deleteguest($id){
		//call model function to delete database
		$this->model_contact->delete_guest($id);
	}

	public function disableguest($id){
		//call model function to delete database

		$data['usersdisabled'] = $this->model_contact->show_disabled_user($id);
		echo  "<br><br>";
		echo "<pre>";
		print_r($data['usersdisabled']);
		echo "</pre>";
		$this->load->view('pausedusers', $data);
	}
}
