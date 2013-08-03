<?php

class Ajax extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->output->set_output('this is an ajax endpoint');
    }

    public function usernameCheck(){
        $this->load->model('userModel');
        $username = $this->input->post('username');

        $taken = $this->userModel->username_check($username);
        if($this->userModel->username_check($username)){
           // $this->output->set_output('not ok');
            echo 'not ok';

        }else{
          //  $this->output->set_output('ok');
            echo 'ok';

        }
    }

}