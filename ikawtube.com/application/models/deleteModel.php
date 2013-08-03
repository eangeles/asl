<?php
class DeleteModel extends CI_Model{

    //delete songs
    function songDelete()
    {
        $this->db->where('songId', $this->input->post('deleteSongId'));
        $this->db->delete('songs');
    }
    //delete videos
    function videoDelete()
    {
          $this->db->where('videoId' ,$this->input->post('deleteVidId'));
          $this->db->delete('videos');
    }
}