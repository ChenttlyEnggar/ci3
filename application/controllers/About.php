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

	public function tambah()
	{
		$this->load->model('Artikel');
		$data = array();

		if ($this->input->post('simpan')) {
			$upload = $this->Artikel->upload();

			if ($upload['result'] == 'success') {
				$this->Artikel->insert($upload);
				redirect('about');
			}else{
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('home_view', $data);
	}

	public function delete($id_blog){
		$this-> load->model('Artikel');
		$this->Artikel->delete($id_blog);
		redirect('about');
	}

	public function edit($id_blog){
		$this-> load->model('Artikel');
		$data['tipe'] = "Edit";
		$data['default'] = $this->Artikel->get_default($id_blog);

		if(isset($_POST['simpan'])){
			$this->Artikel->update($_POST, $id_blog);
			redirect('about');
		}

		$this->load->view('home_view_form', $data);
	}
	
}