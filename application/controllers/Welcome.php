<?php
/**
 * Created by PhpStorm.
 * User: hafiz
 * Date: 21/08/2019
 * Time: 11:45 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    //Class object constructor
    public function __construct()
    {
        parent::__construct();
    }
    
    //Class default method if other method don't exist
    public function index()
    {
        $this->load->view('welcome_message');
    }
    
}