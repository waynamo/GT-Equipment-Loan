<?php
class Loans_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_loans()
		{
                $query = $this->db->get('loans');
                return $query->result_array();
        }
		
		public function set_loans()
		{
			$this->load->helper('url');

			$data = array(
				'equip_name' => $this->input->post('equip_name'),
				'serial_num' => $this->input->post('serial_num'),				
				'loan_date' => $this->input->post('loan_date'),
				'loan_by' => $this->input->post('loan_by'),
				'issue_by' => $this->input->post('issue_by'),
				'remarks' => $this->input->post('remarks')
			);
			
			return $this->db->insert('loans', $data);
		}		
		
}