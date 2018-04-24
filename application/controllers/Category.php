<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{
	public function create()
	{
		//Judul Halaman
		$data['page_title'] = 'Buat Kategori';


        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada bosque.'
            )
        );

	}
}
