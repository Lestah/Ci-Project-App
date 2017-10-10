<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fliptop_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



	public function get_all_battles()
	{
			$query = $this->db->query('SELECT * FROM fliptop');
			return $query->result_array();	
	}

	public function get_battles_by_cat($cat)
	{
		$query = $this->db->get_where('fliptop', array('battle_categories' => $cat));
        return $query->result_array();
	}

	public function play_battle_by_id($id = 0)
	{
		if ($id === 0)
        {
            $query = $this->db->get('fliptop');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('fliptop', array('id' => $id));
        return $query->row_array();
	}
}