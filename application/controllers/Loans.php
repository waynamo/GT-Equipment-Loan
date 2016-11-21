<?php
class Loans extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('loans_model');
				$this->load->model('equipments_model');
                $this->load->helper('form','url_helper');
				$this->load->library('session','form_validation');
        }

		public function index($msg=NULL)
		{
				$data['loans'] = $this->loans_model->get_loans();				
				$data['msg'] = $msg;
				
				$this->load->view('templates/header');
				$this->load->view('loans/index',$data);
				$this->load->view('templates/footer');			
		}
		
        public function newloan()
        {      
				$this->load->helper('form');
				$data['equipments'] = $this->equipments_model->get_equipments();

				$this->load->view('templates/header');
				$this->load->view('loans/newloan',$data);
				$this->load->view('templates/footer');
        }
		
		public function returned()
		{
				$data['loans'] = $this->loans_model->get_returns();								
				
				$this->load->view('templates/header');
				$this->load->view('loans/returned',$data);
				$this->load->view('templates/footer');		
		}
		
		public function create()
		{					
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('equip_name', 'Equipment Name', 'required');
			$this->form_validation->set_rules('loan_email', 'Email Address', 'required');			

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('loans/newloan');
				$this->load->view('templates/footer');

			}
			else
			{			
				
				//Upload Files
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 0;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
				
				//$new_name = $_FILES["hardware_image"]['name'].$loan_id;
				//$config['file_name'] = $loan_id;

                $this->load->library('upload', $config);
				
				if ($this->upload->do_upload('hardware_image'))
                {									
					$data = array('upload_data' => $this->upload->data());
					$file_name = $data['upload_data']['file_name'];					
                }
				//------------------------------
				
				$loan_id = $this->loans_model->set_loans($file_name);
				$this->index();
			}
		}
		
		public function get_loan_item($id)
		{
			$this->load->helper('form');
			
			$data['loan_item'] = $this->loans_model->get_loan_item($id);
			$this->load->view('templates/header');
			$this->load->view('loans/loan_item',$data);
			$this->load->view('templates/footer');
		}
		
		public function return_loan_item()
		{
			$this->load->library('form_validation');
			$this->load->helper('form');
			
			$id = $this->input->post('id');			
			
			$this->form_validation->set_rules('return_by', 'Return By', 'required');
			$this->form_validation->set_rules('receive_by', 'Received By', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->get_loan_item($id);
			}
			else
			{
				$this->loans_model->return_loan_item($id);
				$msg = "Loan item returned. Thank you.";
				$this->index($msg);
			}
		}
}