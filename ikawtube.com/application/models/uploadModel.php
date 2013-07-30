<?php

class UploadModel extends CI_Model{

    public function insert_song($songfile){
        $data = array(
            'name'=>$songfile,
        );
        $this->db->insert('songs',$data);
    }

    function getSongList(){
        $query = $this->db->query('select * from songs');
        return $query;
    }

    public function insert_video($videofile){
        $data = array(
            'file'=>$videofile,
        );
        $this->db->insert('videos',$data);
    }
    function getVideoList(){
        $query = $this->db->query('select * from videos');
        return $query;
    }
}