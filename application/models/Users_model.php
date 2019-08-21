<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 22/08/2019
     * Time: 4:08 AM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Users_model extends CI_Model
    {
        //Class object constructor
        public function __construct()
        {
            parent::__construct();
        }
        
        //Class default method if other method don't exist
        public function insert_name($fn, $ln)
        {
            //setting value pair with table column else data will confuse th query builder
            $data = array('first_name' => $fn, 'last_name' => $ln);
            
            //Query = INSERT INTO `tbl_users`(`first_name`,`last_name`) VALUES('$fn', '$ln');
            if ($this->db->insert('tbl_users', $data)) {
                return TRUE;
            }
            return FALSE;
        }
    
        public function fetch_name()
        {
            //Query = SELECT * FROM `tbl_users` WHERE 1
            $query = $this->db->get('tbl_users');
            
            //result() return values as array of objects
            //Objects are Table row
            return $query->result();
        }
        
    }