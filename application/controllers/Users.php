<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }



	public function index()
	{   
            $data = [
                'title' => 'Data Users',
                'content' => 'VUsers',
            ];
            $data['GetData'] = $this->Users_model->getUsers();
    
            $this->load->view('layouts/layout_view', $data); 
	}





    function get($id = null) {
        if($id !== null) {
            $data = $this->Users_model->getByUsersId($id); // berdasarkan id
        } else {
            $data = $this->Users_model->getUsers();
        }
        echo json_encode($data);
    }

 
  
    
	public function tambah()
	{         
                if($this->input->method() === 'post') {
                    $username = $this->input->post('userName');
                    $pass = sha1($this->input->post('pass'));
                    $levelUser = $this->input->post('levelUser');
        
                    $this->Users_model->saveUsers($username, $pass, $levelUser);
                }         
	}
    
	public function edit($id)
	{   
                $levelUser = $this->input->post('levelUser');
                $this->Users_model->updateUsers($id, $levelUser);      
	}


	public function delete($id)
	{   
                $validasi = $this->Users_model->getByUsersId($id);
                if(!empty($validasi)) {
                    $this->Users_model->deleteUsers($id);
                }
    }




}
