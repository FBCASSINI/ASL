<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/30/16
 * Time: 10:21 AM
 */

class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
        $this -> load -> library('form_validation');
    }

    function index()
    {
        // set form validation rules
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('header');
        }
        else
        {
            //insert user details into db
            $data = array(
                'fname' => $this->input->post('firstname'),
                'lname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            if ($this->user_model->insert_user($data))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                redirect('signup/index');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('signup/index');
            }
        }
    }
}
?>