<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModels extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getByUsersId($id)
    {
        return $this->db->query("SELECT * FROM penilaian WHERE id_penilaian='$id'")->row(); // row, untuk menampilkan 1 Users
    }

    public function getUsers()
    {
        return $this->db->query("SELECT * FROM penilaian")->result(); // result, untuk menampilkan Users lebih dari 1
    }

    public function saveUsers($matkul, $mutu)
    {
        $this->db->query("INSERT INTO penilaian (matkul, mutu) VALUES ('$matkul', '$mutu')");
    }

    public function updateUsers($id, $matkul, $mutu)
    {
        $this->db->query("UPDATE penilaian SET matkul='$matkul',mutu ='$mutu' WHERE id_penilaian='$id'");
    }

    public function deleteUsers($id)
    {
        $this->db->query("DELETE FROM penilaian WHERE id_penilaian='$id'");
    }

    // ---------------------- ---------------------- //

    public function getByChatId($id)
    {
        return $this->db->query("SELECT * FROM chat WHERE id_chat='$id'")->row(); // row, untuk menampilkan 1 Users
    }

    public function getChat()
    {
        return $this->db->query("SELECT * FROM chat")->result(); // result, untuk menampilkan Users lebih dari 1
    }

    public function saveChat($nama, $isi, $stats)
    {
        $this->db->query("INSERT INTO chat (nama, isi,stats) VALUES ('$nama', '$isi','$stats')");
    }

    public function updateChat($id, $nama, $isi, $stats)
    {
        $this->db->query("UPDATE chat SET nama='$nama',isi ='$isi',stats='$stats' WHERE id_chat='$id'");
    }

    public function deleteChat($id)
    {
        $this->db->query("DELETE FROM chat WHERE id_chat='$id'");
    }
}

/* End of file: MainModels.php */
