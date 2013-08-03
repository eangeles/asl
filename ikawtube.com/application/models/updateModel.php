<?php

class UpdateModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    //update song info
    function updateSongInfo(){

        $data = array(
            'artist'=>$this->input->post('edit_song_artist'),
            'title'=>$this->input->post('edit_song_title'),
            'albumName'=>$this->input->post('edit_song_album'),
            'year'=>$this->input->post('edit_song_release'),

        );
        $this->db->where('songId' ,$this->input->post('songId'));
        $this->db->update('songs',$data);
    }
    //update song info
    function updateVideoInfo(){

        $data = array(
            'artist'=>$this->input->post('edit_video_artist'),
            'title'=>$this->input->post('edit_video_title'),

        );
        $this->db->where('videoId' ,$this->input->post('vId'));
        $this->db->update('videos',$data);
    }
}