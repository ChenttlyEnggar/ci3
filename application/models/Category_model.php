<?php
class Category_model extends CI_Model{

	public function get_category(){
		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get_single($id)
	{
		$query = $this->db->query('select * from categories where id='.$id);
		return $query->result();
	}
  // public function index(){
  //   $this->load->model('Category_model');

  //   $data['Category'] = $this->Category_model->get_category();
  // }

	public function create_category()
   	{
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );
       return $this->db->insert('categories', $data);
   }

 //   public function edit($id){
	// 		$data = array(
	// 			'cat_name' => $this->input->post('cat_name'),
	// 			'cat_description' => $this->input->post('cat_deskripsi')
	// 		);
	// 	$this->db->where('id',$id);
	// 	$this->db->update('categories', $data);
	// }
   public function edit($id){
        $cat_name = $this->db->escape($post['cat_name']);
        $cat_description = $this->db->escape($post['cat_description']);

        $sql = $this->db->query("UPDATE categories SET cat_name=$cat_name, cat_description=$cat_description");
        return true;
    }

	public function Hapus($id){
		$query = $this->db->query('DELETE from categories where id = '.$id);
	}

	
	public function generate_cat_dropdown()
   {
       $this->db->select ('
           categories.id,
           categories.cat_name
       ');
       $result = $this->db->get('categories');

       // Membuat array dropdown
       // Baris pertama select (default)
       $dropdown[''] = 'Please Select';
       if ($result->num_rows() > 0) {
         
           foreach ($result->result_array() as $row) {
               // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
               $dropdown[$row['id']] = $row['cat_name'];
           }
       }
       return $dropdown;
   }


}