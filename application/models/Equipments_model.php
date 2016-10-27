<?php
class Equipments_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_equipments()
		{
			$this->db->order_by('equip_name');
			$query = $this->db->get('equipments');
			
			return $query->result_array();
        }
		
		public function get_equipments_item($id)
		{
			$query = $this->db->get_where('equipments',array('id' => $id));		
			return $query->row_array();
		}
		
		public function set_equipments()
		{
			$data = array(
				'equip_name' => $this->input->post('equip_name')
			);			
			return $this->db->insert('equipments', $data);
		}
		
		public function edit_equipments()
		{
			$id = $this->input->post('id');
			
			$data = array(
				'equip_name' => $this->input->post('equip_name')
			);
			$this->db->where('id', $id);
			return $this->db->update('equipments', $data);
		}
		
		public function remove_equipments($id)
		{
			$this->db->delete('equipments', array('id' => $id)); 
		}
}