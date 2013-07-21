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
}