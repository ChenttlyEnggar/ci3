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
		$this->load->model('category_model');
		$data = array();
		$data['Category']=$this->category_model->get_category();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul','isi judul !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_tanggal','isi tanggal !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_content','isi konten !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_nama_penulis','isi nama penulis !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_lokasi_penulis','isi lokasi penulis !!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_penerbit','isi penerbit !!!', 'required', array('required' => 'isi %s,'));

		if($this->form_validation->run()==false){
			$this->load->view('tambah', $data);
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

	 public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada 
bosque.'
            )
        );
          if($this->form_validation->run() === FALSE){
            //$this->load->view('templates/header');
            $this->load->view('home_view', $data);
            //$this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            redirect('category');
        }
    }

}