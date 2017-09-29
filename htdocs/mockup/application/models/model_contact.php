<?php

class Model_contact extends CI_Model {

	//guestbook creation
	public function __construct()
	{
		
		parent::__construct();


	}

	public function add_guest(){
		$data = array(
        'lastname' => $this->input->post('lastname'),
        'firstname' => $this->input->post('firstname'),
        'phonenumber' => $this->input->post('phone'),
        'emailaddress' => $this->input->post('emailaddress'),
        'homeaddress' => $this->input->post('home')
);

$this->db->insert('guestbook', $data);
redirect('contact/displayguest');
	}

	public function get_guest(){
		$query = $this->db->get('guestbook');
		return $query->result_array();
	}

	public function get_guest_record($id){
		//
		//$this->db->select->('contact_id', 'lastname', 'firstname')
		$this->db->where('contact_id', $id);
		$query = $this->db->get('guestbook');
		return $query->row_array(); //returns just a record
	}

	//to update specific record based on id
	public function update_guest($id){

		$data = array(
        'lastname' => $this->input->post('lastname'),
        'firstname' => $this->input->post('firstname'),
        'phonenumber' => $this->input->post('phone'),
        'emailaddress' => $this->input->post('emailaddress'),
        'homeaddress' => $this->input->post('home')
);
$this->db->where('contact_id', $id); //very important else it will update everywhere
$this->db->update('guestbook', $data);
redirect('contact/displayguest');
	
	}

	public function delete_guest($id){
		$this->db->where('contact_id', $id);
		$this->db->delete('guestbook');
		redirect('contact/displayguest');
	}

	private function disable_guest($id){
		$num = 0;
		$this->db->set('disableuser', $num);
		$this->db->where('contact_id', $id);
		$this->db->update('guestbook');
		/* print disabled users
		$this->db->where('disableuser', '1');
		$query = $this->db->get('guestbook');
		return $query->result_array();
		**/
		
	}

	public function show_disabled_user($id){
		$this->disable_guest($id);
		$this->db->where('disableuser', '1');
		$query = $this->db->get('guestbook');
		print_r($query->result_array());
		$newdata[]= $query->result_array();
		print_r($newdata);
		//$this->session->set_userdata()
		//return $query->result_array();	
		//redirect('contact/displayguest');
	}
}
