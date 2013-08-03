<?php

class Home extends CI_Controller{

    function __construct(){

        parent::__construct();

    }

    function index($error = ''){

        $data['main'] = 'home';
        $data['error'] = $error;
        $this->load->view('includes/template', $data);
    }

    public function process(){
        //load the model
        $this->load->model('userModel');
        //validate the user can login
        $result = $this->userModel->validate();

        //verify the result
        if(!$result){
            //if user did not validate, go back to login

            $error = '<p class="errors">Invalid username and/or password.</p>';
            $this->index($error);
        }else{

            header('Location: http://ikawtube.com/user/dashboard');

        }
    }


    public function perform_register(){
        $this->load->library('form_validation');

        //form validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('dob', 'Date of birth', 'required');

        if($this->form_validation->run() ==  false){
            $this->index();
        }else{
            $this->load->model('userModel');
            if($query = $this->userModel->new_user()){
                //redirect('user/dashboard');
                header('Location: http://ikawtube.com/user/dashboard');
            }else{
                $this->index();
            }
        }
    }
}