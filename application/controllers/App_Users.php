<?php
class App_Users extends CI_Controller {

        public function __construct()
        {
			parent::__construct();
			$this->load->model('app_users_model');
			$this->load->helper('url_helper');
			$this->load->library('form_validation');
        }
		
		public function index()
		{
			$data['users'] = $this->app_users_model->get_users();
			
			$this->load->view('templates/header');
			$this->load->view('app_users/index',$data);
			$this->load->view('templates/footer');	
		}
		
		public function add_user()
		{			
			$this->load->view('templates/header');
			$this->load->view('app_users/add_user');
			$this->load->view('templates/footer');			
		}
		
		public function get_user($id)
		{
			$this->load->helper('form');
			$data['users'] = $this->app_users_model->get_user($id);
			
			$this->load->view('templates/header');
			$this->load->view('app_users/add_user',$data);
			$this->load->view('templates/footer');			
		}
		
		public function create_user()
		{
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[app_users.username]',
				array('is_unique' => 'Username exist already. Please check.')
			);
			$this->form_validation->set_rules('firstname', 'First name', 'required');
			$this->form_validation->set_rules('lastname', 'Last name', 'required');
			$this->form_validation->set_rules('email_address', 'Email Address', 'required');
							
			if ($this->form_validation->run() === TRUE)
			{
				$this->app_users_model->set_users();					
				$this->index();
			}
			else
			{
				$this->add_user();
			}
		}
}