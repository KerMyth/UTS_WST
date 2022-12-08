<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function cekUser($username, $pass) {
        return $this->db->query("SELECT * FROM user WHERE userName='$username' AND pass='$pass'");
    }

    public function getByUsersId($id) {
        return $this->db->query("SELECT * FROM user WHERE idUser='$id'")->row(); // row, untuk menampilkan 1 data
    }

    public function getUsers() {
        return $this->db->query("SELECT * FROM user")->result(); // result, untuk menampilkan data lebih dari 1
    }

    public function saveUsers($username, $pass, $levelUser) {
        $this->db->query("INSERT INTO user (userName, pass, levelUser) VALUES ('$username', '$pass', '$levelUser')");
    }

    public function updateUsers($id, $levelUser) {
        $this->db->query("UPDATE user SET levelUser='$levelUser' WHERE idUser='$id'");
    }

    public function deleteUsers($id) {
        $this->db->query("DELETE FROM user WHERE idUser='$id'");
    }

}