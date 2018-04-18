<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('biodata');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from biodata where id_blog='.$id);
		return $query->result();
	}

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul' => $this->input->post('input_judul'),
			'tanggal' => $this->input->post('input_tanggal'),
			'konten' => $this->input->post('input_content'),
			'image' => $upload['file']['file_name'],
			'nama_penulis' => $this->input->post('input_nama_penulis'),
			'lokasi_penulis' => $this->input->post('input_lokasi_penulis'),
			'penerbit' => $this->input->post('input_penerbit')
		);

		$this->db->insert('biodata', $data);
	}

	//model untuk update

	public function update($post, $id_blog){
		$judul = $this->db->escape($post['input_judul']);
		$tanggal = $this->db->escape($post['input_tanggal']);
		$konten = $this->db->escape($post['input_konten']);

		$sql = $this->db->query("UPDATE blog SET judul=$judul, tanggal=$tanggal, konten=$konten");
		return true;
	}

	public function delete($id_blog){
		$query = $this->db->query('DELETE from biodata where id_blog= '.$id_blog);
	}
}