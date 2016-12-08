<?php
class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }

    function index()

    {

        // submit
        if ($this->form_validation->run() == FALSE) {
            // fails
            $this->load->view('header');
        }

        //insert user details into db
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        if ($this->user_model->insert_user($data)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
            redirect('');
        } else {
            // error
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
            redirect('');
        }
    }
}