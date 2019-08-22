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
            if($query->num_rows() == 0) {
                return FALSE;
            }
            //result() return values as array of objects
            //Objects are Table row
            return $query->result();
        }
        
        public function delete_name($id)
        {
            //setting value pair with table column else data will confuse th query builder
            $data = array('id' => $id);
            
            //Query = INSERT INTO `tbl_users`(`first_name`,`last_name`) VALUES('$fn', '$ln');
            if ($this->db->delete('tbl_users', $data)) {
                return TRUE;
            }
            return FALSE;
        }
        
        public function get_user_by_id($id)
        {
            $sql = array('id' => $id);
            
            $user = $this->db->get_where('tbl_users', $sql,1);
            if ($user->num_rows() == 0) {
                return FALSE;
            } else {
                $result = $user->result(); //CI always return a array of objects
                return $result[0];
            }
            
        }
	
		public function update_name($id, $fn, $ln)
		{
			$data = array('first_name' => $fn, 'last_name' => $ln);
			$this->db->set($data);
			$this->db->where('id', $id);
			if($this->db->update('tbl_users')) {
				return TRUE;
			}
			return FALSE;
        }
    }
