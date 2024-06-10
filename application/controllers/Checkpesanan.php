<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkpesanan extends CI_Controller {


	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Lieur TopUp - Layanan topup official';
		$this->load->view('home/header', $data);
		$this->load->view('home/navbar', $data);
		$this->load->view('checkpesanan', $data);
	}
}
