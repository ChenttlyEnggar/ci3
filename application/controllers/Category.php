<?php 
class Category extends CI_Controller {

    public function index()
    {
        $this->load->model('category_model');
        $data['category'] = $this->category_model->get_category();
        $this->load->view('cat_view', $data);
    }

    public function detail($id)
    {
        $this->load->model('category_model');
        $data['detail'] = $this->category_model->get_single($id);
        $this->load->view('category_detail', $data);
    }

    public function create()    
    {
        $this->load->model('category_model');
        $data = array();
        $this->load->library('form_validation');
        // Form validasi untuk Nama Kategori        
        $this->form_validation->set_rules('cat_name','Nama Kategori','required|is_unique[categories.cat_name]',      
        array('required' => 'Isi %s donk, jangan kosong.'));

         if($this->form_validation->run() === FALSE){            
                $this->load->view('cat_create', $data);
         } else {           
                $this->category_model->create_category();            
                redirect('category');        
        } 
        // $this->load->view('cat_view');
    }

    public function Delete($id){
        $this->load->model('Category_model');
        $this->Category_model->hapus($id);
        redirect('Category');
    }

    // public function Edit($id){
    //     $this->load->model('Category_model');
    //     // $data['tipe'] = "Edit";
    //     $data['single'] = $this->Category_model->get_single($id);

    //     if($this->input->post('simpan')){
    //         $this->Category_model->edit($id);
    //         redirect('Category');
    //     }
    //     $this->load->view('form_kategori', $data);
    // }

    public function edit($id){
        $this-> load->model('Category_model');
        $data['tipe'] = "Edit";
        $data['default'] = $this->Category_model->get_single($id);

        if(isset($_POST['simpan'])){
            $this->category_model->update($_POST, $id);
            redirect('category');
        }

        $this->load->view('form_kategori', $data);
    }


}