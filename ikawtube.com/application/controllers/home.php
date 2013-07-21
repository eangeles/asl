<?php

class Home extends CI_Controller{

    function __construct(){

        parent::__construct();

    }

    function index(){

        $data['main'] = 'home';
        $this->load->view('includes/template', $data);
    }

}