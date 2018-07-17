<?php

class M_user extends CI_Model
{
    public function get_user_level($user_id)
    {
        $this->db->select('fk_level_id');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->row(0)->fk_level_id;
        } else {
            return false;
        }
    }

    public function register($enc_password){
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'fk_level_id' => $this->input->post('membership'),
        );
        return $this->db->insert('users', $data);
    }

    public function get_user_details( $username )
    {
        $this->db->where('username', $username);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function addUser($data)
    {
        $this->db->insert('users', $data);
    }
    public function login($username, $password){
        // Validasi
        $result = $this->db->query("SELECT * from users where username = '".$username."' and password = '".$password."'");
        if($result->num_rows() == 1){
            return $result->result_array();
        } else {
            return false;
        }
    }
    public function lihatSemuaUser()
    {
        $result = $this->db->query("SELECT * from users");
        return $result->result_array();
    }
    public function getUserbyID($idUser)
    {
        $result = $this->db->query("SELECT * from users where user_id = ".$idUser);
        return $result->result_array();
    }
    public function editUser($data)
    {
        $query = $this->db->query("UPDATE users set nama = '".$data['nama']."', email = '".$data['email']."', username = '".$data['username']."' where user_id = ".$data['user_id']);
    }
    public function deleteUser($id)
    {
        $query = $this->db->query("DELETE From users where user_id = ".$id);
    }
}