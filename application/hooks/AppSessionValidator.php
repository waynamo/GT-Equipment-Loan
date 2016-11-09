<?php

class AppSessionValidator {

    var $CI;

    function __construct(){
        $this->CI =& get_instance();
        if(!isset($this->CI->session))  //Check if session lib is loaded or not
          $this->CI->load->library('session');  //If not loaded, then load it here
    }

    public function initialize()
    {		

		if(uri_string() != 'logins' && uri_string() != 'logins/login')
		{
			if(!$this->CI->session->userdata['logged_in'])
			{
				redirect(site_url('logins'));
			}
		}

    }

}    