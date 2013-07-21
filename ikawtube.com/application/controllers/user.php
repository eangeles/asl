<?php

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function dashboard(){
        $this->load->library('upload');
        $this->load->model('uploadModel');
        $songList = $this->uploadModel->getSongList();
        $song = $songList->result();


        $data['error'] = $this->upload->display_errors();
        $data['song'] = $song;
        $data['songlist'] = $songList;
        $data['main'] = 'dashboard';
        $this->load->view('includes/template',$data);
    }

    function uploads(){
        $config['upload_path'] = './song_uploads/';
        $config['allowed_types'] = 'mp3|m4a';

        $this->load->library('upload',$config);
        $data['error'] = $this->upload->display_errors();

        if(!$this->upload->do_upload()){
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'dashboard';
            $this->load->view('includes/template', $data);
        }else{
            $this->load->model('uploadModel');
            $songList = $this->uploadModel->getSongList();
            $song = $songList->result();
            $data = $this->upload->data();
            $this->uploadModel->insert_song($data['file_name']);

            $data['song'] = $song;
            $data['songlist'] = $songList;
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'success';
           // $this->load->view('includes/template',$data);
            redirect('user/dashboard',$data);
        }
    }


}