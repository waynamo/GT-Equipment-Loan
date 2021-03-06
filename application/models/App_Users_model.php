<?php
class App_Users_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
				$this->load->helper('date');
        }
		
		public function get_users()
		{
			$this->db->order_by('firstname');
			$query = $this->db->get('app_users');
			
			return $query->result_array();
        }
		
		public function get_user($id)
		{
			$query = $this->db->get_where('app_users',array('id' => $id));		
			return $query->row_array();			
		}
		
		public function set_users()
		{
			$data = array(
				'username' => $this->input->post('username'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'email_address' => $this->input->post('email_address'),
				'date_created' => mdate('%Y-%m-%d %H:%i:%a',time())
			);			
			return $this->db->insert('app_users', $data);			
		}
		
		public function check_authorized_user($username)
		{
			$query = $this->db->get_where('app_users',array('username' => $username));		
			return $query->row_array();				
		}
		
}