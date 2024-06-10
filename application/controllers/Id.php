<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Games_model', 'games');
		$this->load->model('Diamond_model', 'diamond');

	}

	public function index($name_games)
	{
		$data['user'] = $this->db->get_where('user
			', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$data['games'] = $this->games->getAllGames();
        $data['games'] = $this->games->getGamesBySlug($name_games); // Mengambil data $data['games'] = $this->games->getGamesById($id);
        $data['diamond'] = $this->diamond->getAllDiamond();

		$data['judul'] = 'Lieur TopUp - Layanan Topup Official';
		$this->load->view('id/header', $data);
		$this->load->view('id/navbar', $data);
		$this->load->view('id', $data );
		$this->load->view('id/footer');
	}
	
	
}
