<?php
class Equipments_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_equipments()
		{
                $query = $this->db->get('equipments');
                return $query->result_array();
        }
		
		public function set_equipments()
		{
			$data = array(
				'equip_name' => $this->input->post('equip_name')
			);			
			return $this->db->insert('equipments', $data);
		}
}