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
            
        }
        
        //Class default method if other method don't exist
        public function index()
        {
            $this->load->view('users/Insert_user');
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
            $this->load->model('Users_model');
            
            //form Validation Rules
            //Reference https://www.codeigniter.com/user_guide/libraries/form_validation.html
            $this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[255]|alpha');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[255]|alpha');
            
            //Check if form validation have false / errors
            if ($this->form_validation->run()) {
                $first_name = $this->input->post('first_name');
                $last_name = $this->input->post('last_name');
                
                if ($this->Users_model->insert_name($first_name, $last_name) != FALSE) {
                    $this->load->view('users/Insert_user', array('msg' => 'Data Insert Successful.'));
                } else {
                    $this->load->view('users/Insert_user', array('msg' => 'Data Insert Failed.'));
                }
            } else {
                $this->load->view('users/Insert_user', array());
            }
        }
        
        public function fetch_name()
        {
            $this->load->model('Users_model');
            
            $user_list = $this->Users_model->fetch_name();

            $this->load->view('users/fetch_user',array('user_names' => $user_list));
        }
        
    }