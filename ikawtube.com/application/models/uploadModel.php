<?php

class UploadModel extends CI_Model{

    public function insert_song($songfile){
        $data = array(
            'file'=>$songfile,
            'userId'=>$this->input->post('id'),
            'artist'=>$this->input->post('song_artist'),
            'title'=>$this->input->post('song_title'),
            'albumName'=>$this->input->post('song_album'),
            'year'=>$this->input->post('song_release'),
        );
        $this->db->insert('songs',$data);
    }

    function getSongList(){
        $query = $this->db->query('select * from songs');
        $row = $query->result_array();
        return $row;
    }

    public function insert_video($videofile){
        $data = array(
            'file' =>$videofile,
            'userId'=>$this->input->post('videoId'),
            'title'=>$this->input->post('vTitle'),
            'artist'=>$this->input->post('vArtist'),
        );
        $this->db->insert('videos',$data);
    }
    function getVideoList(){
        $query = $this->db->query('select * from videos');
        $row = $query->result_array();
        return $row;
    }
}