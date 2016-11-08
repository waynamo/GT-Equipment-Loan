<?php

class AppSessionValidator extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');       
    }

    public function initialize()
    {
        if (!isset($_SESSION['username']))
        {
            echo "Please login";
        }
    }

}    