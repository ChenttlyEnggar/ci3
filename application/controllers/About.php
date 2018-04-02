<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->model('Artikel');
		$data['artikel'] = $this->Artikel->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('Artikel');
		$data['detail'] = $this->Artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}
}