<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('gaunk_helper');
}
	
	public function index()
	{
		
		
		$data['judul'] = 'Check ID Game - Layanan Topup Official';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		  $this->load->view('check/header',$data);
		  $this->load->view('check/navbar',$data);
		  $this->load->view('check',$data);
		   

		
	}

	
}
