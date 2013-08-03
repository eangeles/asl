<?php

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->authenticate();
    }

    function dashboard(){
        $this->load->library('upload');
        $this->load->model('uploadModel');
        $songList = $this->uploadModel->getSongList();

        $uid = $this->session->userdata('userId');
        $username = $this->session->userdata('username');

        $videoList = $this->uploadModel->getVideoList();

        $data['error'] = $this->upload->display_errors();
        $data['username'] = $username;
        $data['userId'] = $uid;
        $data['songlist'] = $songList;

        $data['videoList'] = $videoList;
        $data['main'] = 'dashboard';
        $this->load->view('includes/template',$data);
    }

    function authenticate()
    {
        if (!$this->session->userdata('is_logged_in'))
        {
            redirect('/');
        }
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

            $data = $this->upload->data();
            $this->uploadModel->insert_song($data['file_name']);

            $data['songlist'] = $songList;
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'success';
            redirect('user/dashboard',$data);
        }
    }
    function upload(){
        $config['upload_path'] = './video_uploads/';
        $config['allowed_types'] = 'ogg|ogv|mp4|mov';
        $config['max_size'] = 200000000;

        $this->load->library('upload',$config);
        $data['error'] = $this->upload->display_errors();

        if(!$this->upload->do_upload()){
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'dashboard';
            echo 'fail';
            $this->load->view('includes/template', $data);
        }else{
            $this->load->model('uploadModel');
            $videoList = $this->uploadModel->getVideoList();

            $data = $this->upload->data();
            $this->uploadModel->insert_video($data['file_name']);

            $uid = $this->session->userdata('userId');

            $data['id'] == $uid;
            $data['videoList'] = $videoList;
            $data = array('error' => $this->upload->display_errors());
            $data['main'] = 'success';
            redirect('user/dashboard',$data);
        }
    }

    //delete songs
    function deleteSong(){

        $this->load->model('deleteModel');

        $this->deleteModel->songDelete();

        header('Location: http://ikawtube.com/user/dashboard');
    }
    //delete songss
    function deleteVideo(){

        $this->load->model('deleteModel');

        $this->deleteModel->videoDelete();

        header('Location: http://ikawtube.com/user/dashboard');

    }

    function update(){
        $this->load->model('updateModel');
        $this->load->library('upload');


        $this->updateModel->updateSongInfo();
          header('Location: http://ikawtube.com/user/dashboard');

    }
    function updateVideo(){
        $this->load->model('updateModel');
        $this->load->library('upload');


        $this->updateModel->updateVideoInfo();
        header('Location: http://ikawtube.com/user/dashboard');
    }

}