<?php
class UserModel extends CI_Model
{
    function insertUser($user)
    {
        return $this->db->insert("user", $user);
    }
    function login()
    {
        $username = $this->input->post("username");
        $pass = $this->input->post("password");
        $this->db->where("username", $username);
        $this->db->where("password", $pass);
        return $this->db->get("user");
    }
}
