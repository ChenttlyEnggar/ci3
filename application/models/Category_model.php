<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Controllers {

	public function create_category()
	{
		$data = array(

           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );

       return $this->db->insert('categories', $data);
   }


}