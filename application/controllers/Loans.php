<?php
class Loans extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('loans_model');
                $this->load->helper('url_helper');
        }

		public function index()
		{
				$data['loans'] = $this->loans_model->get_loans();
				
				$this->load->view('templates/header');
				$this->load->view('loans/index',$data);
				$this->load->view('templates/footer');			
		}
		
        public function newloan()
        {      
				$this->load->helper('form');				

				$this->load->view('templates/header');
				$this->load->view('loans/newloan');
				$this->load->view('templates/footer');
        }

		
		public function create()
		{			
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('equip_type', 'Equipment Type', 'required');
			$this->form_validation->set_rules('serial_num', 'Serial Number', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('loans/newloan');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->loans_model->set_loans();
				$this->load->view('templates/header');
				$this->load->view('loans/success');
				$this->load->view('templates/footer');
			}
		}
}