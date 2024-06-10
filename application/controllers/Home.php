<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Games_model', 'games');
		$this->load->model('Diamond_model', 'diamond');

	}

	public function index()
	{
		
		$data['user'] = $this->db->get_where('user
			', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$data['games'] = $this->games->getAllGames();
		$data['diamond'] = $this->diamond->getAllDiamond();
		$data['judul'] = 'Lieur TopUp - Layanan Topup Official';
		$this->load->view('home/header', $data);
		$this->load->view('home/navbar', $data);
		$this->load->view('home', $data);
		$this->load->view('home/footer',);
	}
	
}
