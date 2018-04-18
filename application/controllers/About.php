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

		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul','isi judul !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_tanggal','isi tanggal !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_content','isi konten !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_nama_penulis','isi nama penulis !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_lokasi_penulis','isi lokasi penulis !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_penerbit','isi penerbit !!!', 'required', array('required' => 'isi %s,'));

		if($this->form_validation->run()==false){
			$this->load->view('tambah');
		}
		else{

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
}

	public function delete($id_blog){
		$this-> load->model('Artikel');
		$this->Artikel->delete($id_blog);
		redirect('about');
	}

	public function edit($id_blog){
		$this-> load->model('Artikel');
		$data['tipe'] = "Edit";
		$data['default'] = $this->Artikel->get_single($id_blog);

		if(isset($_POST['simpan'])){
			$this->Artikel->update($_POST, $id_blog);
			redirect('about');
		}

		$this->load->view('home_view_form', $data);
	}
	
}