<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/29/16
 * Time: 10:54 AM
 */


class Users_model extends CI_Model {

    function __construct()

    {

        parent::__construct();

        $this->load->database("MonsterCode");

    }

    public function get_all_users()

    {

        $query = $this->db->get('users');

        return $query->result();

    }
    public function insert_users_to_db($data)

    {

        return $this->db->insert('header', $data);

    }
    public function getById($id){
        $query = $this->db->get_where('users',array('id'=>$id));
        return $query->row_array();
    }
    public function edit(){
        $id = $this->uri->segment(3);
        $data['user'] = $this->users_model->getById($id);
        $this->load->view('edit', $data);
    }
}

