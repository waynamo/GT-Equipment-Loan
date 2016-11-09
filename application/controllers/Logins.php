<?php
class Logins extends CI_Controller {

        public function __construct()
        {
			parent::__construct();
			$this->load->helper('url_helper');
			//$this->load->model('logins_model');
			$this->load->library('session');			
        }
		
		public function index($msg=NULL)
		{
			$this->load->library('form_validation');
			$data['msg'] = $msg;
			
			$this->load->view('templates/header');
			$this->load->view('logins/index',$data);
			$this->load->view('templates/footer');
		}
		
		public function login()
		{
			$this->load->library('form_validation');
			
			// using ldap bind
			$ldaprdn  = $this->input->post('username');     // ldap rdn or dn
			$ldappass = $this->input->post('password');  // associated password
			
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
								
			if ($this->form_validation->run() === TRUE)
			{					
				// connect to ldap server
				$ldapconn = ldap_connect("haapsdosvrdc001");					

				if ($ldapconn) {
					// binding to ldap server
					$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

					// verify binding
					if ($ldapbind) {
						//echo "LDAP bind successful...";
						$login_data = array(
								'username'  => $ldaprdn,								
								'logged_in' => TRUE,
								'login_page' => FALSE
						);

						$this->session->set_userdata($login_data);
						
						redirect('loans/index');
					} else {
						$msg = "Login failed.";
						$this->index($msg);
					}

				}
			}
			else
			{
				$this->index();
			}
		}
}

