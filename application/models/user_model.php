<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'kodepos' => $this->input->post('kodepos')
        );

        // Insert user
        return $this->db->insert('users', $data);
    }


    // Mendapatkan level user
  function get_user_level($user_id)
   {
        // Dapatkan data user berdasar $user_id
        $this->db->select('fk_id_level');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->fk_id_level;
        } else {
            return false;
        }
    }

    function get_user_details($username)
    {
        $this->db->join('level', 'level.level_id = users.fk_id_level', 'left');
        $this->db->where('username', $username);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
    }
    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');


        if($result->num_rows() == 1){
            return $result->row(0)->user_id;
        } else {
            return false;
        }
    }
}
