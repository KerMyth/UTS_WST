<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerChat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MainModels');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Chat',
            'content' => 'FormChat',
        ];
        $data['GetData'] = $this->MainModels->getChat();

        $this->load->view('layouts/layout_view', $data);
    }

    function get($id = null)
    {
        if ($id !== null) {
            $data = $this->MainModels->getByChatId($id); // berdasarkan id
        } else {
            $data = $this->MainModels->getChat();
        }
        echo json_encode($data);
    }

    public function tambah()
    {
        if ($this->input->method() === 'post') {

            $nama = ($this->input->post('nama'));
            $isi = $this->input->post('isi');
            $stats = $this->input->post('stats');



            $this->MainModels->saveChat($nama, $isi, $stats);
        }
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama');
        $isi = $this->input->post('isi');
        $stats = $this->input->post('stats');
        $this->MainModels->updateChat($id, $nama, $isi, $stats);
    }

    public function delete($id)
    {
        $validasi = $this->MainModels->getByChatId($id);
        if (!empty($validasi)) {
            $this->MainModels->deleteChat($id);
        }
    }
}

/* End of file: ControllerChat.php */
