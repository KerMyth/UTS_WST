<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerData extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MainModels');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Users',
            'content' => 'FormData',
        ];
        $data['GetData'] = $this->MainModels->getUsers();

        $this->load->view('layouts/layout_view', $data);
    }





    function get($id = null)
    {
        if ($id !== null) {
            $data = $this->MainModels->getByUsersId($id); // berdasarkan id
        } else {
            $data = $this->MainModels->getUsers();
        }
        echo json_encode($data);
    }

    public function tambah()
    {
        if ($this->input->method() === 'post') {

            $matkul = ($this->input->post('matkul'));
            $mutu = $this->input->post('mutu');


            $this->MainModels->saveUsers($matkul, $mutu);
        }
    }

    public function edit($id)
    {
        $matkul = $this->input->post('matkul');
        $mutu = $this->input->post('mutu');
        $this->MainModels->updateUsers($id, $matkul, $mutu);
    }

    public function delete($id)
    {
        $validasi = $this->MainModels->getByUsersId($id);
        if (!empty($validasi)) {
            $this->MainModels->deleteUsers($id);
        }
    }
}

/* End of file: ControllerData.php */
