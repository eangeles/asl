<?php

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function dashboard(){
        $this->load->library('upload');
        $this->load->model('uploadModel');
        $songList = $this->uploadModel->getSongList();
        $song = $songList->result();

        $videoList = $this->uploadModel->getVideoList();
        $video = $videoList->result();

        $data['error'] = $this->upload->display_errors();
        $data['song'] = $song;
        $data['songlist'] = $songList;
        $data['video'] = $video;
        $data['videoList'] = $videoList;
        $data['main'] = 'dashboard';
        $this->load->view('includes/template',$data);
    }

    //logout
    function logout(){
        $this->session->sess_destroy();
        redirect('http://ikawtube.com');
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
            redirect('user/dashboard',$data);
        }
    }
    function upload(){
        $config['upload_path'] = './video_uploads/';
        $config['allowed_types'] = 'mp3|m4a|flv|mp4|mov';

        $this->load->library('upload',$config);
        $data['error'] = $this->upload->display_errors();

        if(!$this->upload->do_upload()){
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'dashboard';
            $this->load->view('includes/template', $data);
        }else{
            $this->load->model('uploadModel');
            $videoList = $this->uploadModel->getVideoList();
            $video = $videoList->result();
            $data = $this->upload->data();
            $this->uploadModel->insert_video($data['file_name']);

            $data['video'] = $video;
            $data['videoList'] = $videoList;
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'success';
            redirect('user/dashboard',$data);
        }
    }


}