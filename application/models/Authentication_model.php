<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	
	class Authentication_model extends CI_Model
	{
		//Class object constructor
		public function __construct()
		{
			parent::__construct();
		}

		public function insert_user($fn, $em, $ps)
		{
		    $data = array('full_name' => $fn, 'email' => $em, 'password' => $ps);

		    if ($this->db->insert('tbl_authenticate', $data))
		        return TRUE;
		    else
		        return FALSE;
		}

		public function fetch_single_user($em, $ps)
        {
            $query = $this->db->get_where('tbl_authenticate', array('email' => $em, 'password' => md5($ps)), 1);
            if($query->num_rows() == 0)
                return FALSE;
            else {
                $user = $query->result();
                return $user[0];
            }
        }
	}
