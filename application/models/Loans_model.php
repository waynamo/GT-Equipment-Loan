<?php
class Loans_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_loans($limit, $start)
		{
			$this->db->limit($limit, $start);
			$this->db->where('return_date IS NULL');			
            $query = $this->db->get('loans');				
            return $query->result_array();
        }
		
		public function get_returns($limit, $start)
		{
			$this->db->limit($limit, $start);
			$this->db->where('return_date IS NOT NULL');
			$this->db->order_by('return_date DESC');
            $query = $this->db->get('loans');				
            return $query->result_array();			
		}
		
		public function get_record_count($type)
		{			
			if($type == 'returned')
			{
				$this->db->where('return_date IS NOT NULL');			
			}
			if($type == 'onloan')
			{
				$this->db->where('return_date IS NULL');			
			}
			$query = $this->db->get('loans');			
			return $query->num_rows();
			
		}
		
		public function set_loans($file_name=NULL)
		{
			$this->load->helper('url');

			$data = array(
				'equip_name' => $this->input->post('equip_name'),
				'serial_num' => $this->input->post('serial_num'),				
				'loan_date' => $this->input->post('loan_date'),
				'loan_by' => $this->input->post('loan_by'),
				'loan_email' => $this->input->post('loan_email'),
				'issue_by' => $this->input->post('issue_by'),
				'remarks' => $this->input->post('remarks'),
				'file_name' => $file_name
			);
			
			return $this->db->insert('loans', $data);
			
		}

		public function get_loan_item($id)
		{
			$query = $this->db->get_where('loans',array('id' => $id));		
			return $query->row_array();
		}
		
		public function return_loan_item($id)
		{
			$data = array(
				'return_date' => date('Y-m-d'),
				'return_by' => $this->input->post('return_by'),
				'receive_by' => $this->input->post('receive_by')
			);
			$this->db->where('id', $id);
			return $this->db->update('loans', $data);
		}
				
}