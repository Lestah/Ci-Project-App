<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fliptop extends CI_Controller {

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
	function __contstruct() {
		parent:: __contstruct();
		$this->load->model('Fliptop_model');
		$this->load->database();
		$this->load->helper('url_helper');
	}


	public function battles()
	{
		$this->load->model('Fliptop_model');
		$data['battles'] = $this->Fliptop_model->get_all_battles();

		$this->load->view('includes/header');
		$this->load->view('test', $data);
		$this->load->view('includes/footer');	
	}

	public function battles_by_cat()
	{
		$cat = $this->uri->segment(3);
		$this->load->model('Fliptop_model');
		$data['battles'] = $this->Fliptop_model->get_battles_by_cat($cat);

		$this->load->view('includes/header');
		$this->load->view('test', $data);
		$this->load->view('includes/footer');


	}

	public function play()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Fliptop_model');
		$data['play'] = $this->Fliptop_model->play_battle_by_id($id);

		$this->load->view('includes/header');
		$this->load->view('play_battle', $data);
		$this->load->view('includes/footer');

	}
}