<?php
	/**
	 * Created by PhpStorm.
	 * User: hafiz
	 * Date: 22/08/2019
	 * Time: 2:57 AM
	 */
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	
	class Users extends CI_Controller
	{
		//Class object constructor
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Users_model');
			
		}
		
		//Class default method if other method don't exist
		public function index()
		{
			$this->fetch_name();
		}
		
		public function fetch_name()
		{
			$user_list = $this->Users_model->fetch_name();
			
			$this->load->view('users/fetch', array('user_names' => $user_list));
		}
		
		public function insert_name()
		{
			//Required Resources
			/* can be load from constructor or auto load
			 * for good performance call recource if and
			 * only if you need and call to that method
			 * if requires more often use constructor / autoload
			 */
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			//container array
			$data = array();
			//form Validation Rules
			//Reference https://www.codeigniter.com/user_guide/libraries/form_validation.html
			$this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[255]|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[255]|alpha');
			
			//Check if form validation have false / errors
			if ($this->form_validation->run()) {
				$first_name = $this->input->post('first_name');
				$last_name = $this->input->post('last_name');
				
				if ($this->Users_model->insert_name($first_name, $last_name) != FALSE) {
					$data['msg'] = 'Data Insert Successful.';
				} else {
					$data['msg'] = 'Data Insert Failed.';
				}
			}
				$this->load->view('users/insert', $data);
		}
		
		public function delete_name($id = NULL)
		{
			$data = array();
			
			if (isset($id)) {
				if ($this->Users_model->delete_name($id) == TRUE) {
					$data['msg'] = "Id Number: " . $id . " deleted Successful.";
				} else {
					$data['msg'] = "Id Number: " . $id . " deletion failed.";
				}
			}
			$data['user_names'] = $this->Users_model->fetch_name();
			
			$this->load->view('users/delete', $data);
		}
		
		public function update_name($id = NULL)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			//form Validation Rules
			//Reference https://www.codeigniter.com/user_guide/libraries/form_validation.html
			$this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[255]|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[255]|alpha');
			
			//container array
			$data = array();
			$update = $this->input->post('update');
			$data['user_info']['id'] = $id;
			
			//send data to update user page
			if (isset($id)) {
				$user_info = $this->Users_model->get_user_by_id($id);
				
				if ($user_info != FALSE) {
					$data['user_info'] = $user_info;
				} else {
					$user_info = NULL;
				}
			}
			
			//update operation
			if (isset($update)) {
				if ($this->form_validation->run()) {
					
					$data['user_info'] = NULL;
					
					$first_name = $this->input->post('first_name');
					$last_name = $this->input->post('last_name');
					
					if ($this->Users_model->update_name($id, $first_name, $last_name) != FALSE)
						$data['msg'] = "Id Number: " . $id . " Updated Successful.";
					else
						$data['msg'] = "Id Number: " . $id . " Update failed.";
				}
			}
			
			$data['user_names'] = $this->Users_model->fetch_name();
			$this->load->view('users/update', $data);
		}
	}
