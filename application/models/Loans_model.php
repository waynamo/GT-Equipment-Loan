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
				'equip_type' => $this->input->post('equip_type'),
				'serial_num' => $this->input->post('serial_num'),
				'equip_accs' => $this->input->post('equip_accs'),
				'loan_date' => $this->input->post('loan_date'),
				'loan_by' => $this->input->post('loan_by'),
				'issue_by' => $this->input->post('issue_by'),
				'return_date' => $this->input->post('return_date'),
				'return_by' => $this->input->post('return_by'),
				'receive_by' => $this->input->post('receive_by'),
				'remarks' => $this->input->post('remarks')
			);
			
			return $this->db->insert('loans', $data);
		}
}