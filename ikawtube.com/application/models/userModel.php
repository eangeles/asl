<?php

class UserModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function validate(){
        //grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->input->post('password'));

        //prepare the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Run the query
        $query = $this->db->get_where('users');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            if($query){
                $data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => true,
                );
                $this->session->set_userdata($data);
                return true;
            }
            // If the previous process did not validate
            // then return false.
            return false;
        }
    }

    function new_user(){
        $new_user = array(
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'email'     => $this->input->post('email'),
            'dob'       => $this->input->post('dob'),
        );

        $insert = $this->db->insert('users', $new_user);
        return $insert;
    }

}