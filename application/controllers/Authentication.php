<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Authentication extends CI_Controller
{
    //Class object constructor
    public function __construct()
    {
        parent::__construct();
        //As all method require this resources set them on constructor
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Authentication_model');
    }

    //Class default method if other method don't exist
    public function index()
    {
        $this->load->view('view');
    }

    public function login()
    {
        $data = array();
        //Form Validation Rule
        $this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[255]|alpha_dash');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $response = $this->Authentication_model->fetch_single_user($email, $password);
            if ($response == FALSE)
                $data['msg'] = "User Not Found";
            else {
                $this->session->set_userdata((array)$response);
                /*print_r($_SESSION);
                die();*/
                redirect(base_url() . 'authentication/home');
            }
        }
        $this->load->view('authenticate/login', $data);
    }

    public function register()
    {
        //container array
        $data = array();
        //Form Validation Rule
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|max_length[255]|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[255]|alpha_dash');
        $this->form_validation->set_rules('pass_conf', 'Password Confirm', 'required|max_length[255]|alpha_dash|matches[password]');

        if ($this->form_validation->run()) {
            $full_name = $this->input->post('full_name');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            if ($this->Authentication_model->insert_user($full_name, $email, $password))
                $data['msg'] = 'Congratulation! ' . $full_name . '<br> Registration Successful.';
            else
                $data['msg'] = 'Sorry! ' . $full_name . '<br> Registration Failed.';
        }

        $this->load->view('authenticate/register', $data);
    }

    public function recovery()
    {
        //container array
        $data = array();

        $this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|valid_email');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $response = $this->Authentication_model->fetch_user_by_email($email);
            if ($response == FALSE) {
                $data['msg'] = "No User Found by this Email Address";
            } else {
                print_r($response);
                die();
            }
        }
        $this->load->view('authenticate/recovery',$data);
    }

    public function activation()
    {
        $this->load->view('authenticate/activation');
    }

    public function home()
    {
        if (empty($this->session->full_name))
            redirect(base_url() . 'authentication/login');
        else
            $this->load->view('authenticate/home');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'authentication/login');
    }

}
