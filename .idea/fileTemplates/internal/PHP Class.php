<?php
#parse("PHP File Header.php")

defined('BASEPATH') OR exit('No direct script access allowed');

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

class ${NAME} extends CI_
{
    //Class object constructor
    public function __construct()
	{
		parent::__construct();
    }
    
    //Class default method if other method don't exist
    public function index() 
    {
        ${DS}this->load->view('view');
    }

}