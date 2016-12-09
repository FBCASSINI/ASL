<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_user($email, $password, $image)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('image', $image);
        $query = $this->db->get('user');
        /* Select * from users where email = $_Post['email'] and password = $_post['password'] */
        return $query->result();
    }

    // get user
    function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        //select id from users where id = $_Post['id']
        $query = $this->db->get('user');
        return $query->result();
    }

    // insert
    function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }


    //delete row
    function delete_row($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    function update($uemail, $id)
    {


        $this->db->where('id', $id);
        $this->db->set('email', $uemail);
        $this->db->update('user');

    }

    function add_image($uimage, $id){
        $this->db->where('id', $id);
        $this->db->set('image', $uimage);
        $this->db->update('user');
    }

}


?>