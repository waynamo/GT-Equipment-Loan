<?php
class Equipments extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('equipments_model');
                $this->load->helper('url_helper');
        }
		
		public function index()
		{
				$this->load->helper('form');
				$data['equipments'] = $this->equipments_model->get_equipments();
			
				$this->load->view('templates/header');
				$this->load->view('equipments/index', $data);
				$this->load->view('templates/footer');				
		}
		
		public function create()
		{				
				$this->load->library('form_validation');

				$this->form_validation->set_rules('equip_name', 'Equipment Name', 'required');
								
				if ($this->form_validation->run() === TRUE)
				{
					$this->equipments_model->set_equipments();					
					$this->index();
				}
				else
				{
					$this->index();
				}
		}
		
		public function delete($id)
		{
				$this->equipments_model->remove_equipments($id);
				$this->index();
		}
}