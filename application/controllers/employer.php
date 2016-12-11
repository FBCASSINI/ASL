<?php
class Employer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');


    }


    /*function index2()
    {

        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $data['cuname'] = $details[0]->company;
        $data['uname'] = $details[0]->firstname . " " . $details[0]->lastname;
        $data['uemail'] = $details[0]->email;
        $data['uimage'] = $details[0]->image;
        $data['upass'] = $details[0]->password;
        $data['location'] = $details[0]->location;
        $data['usalary'] = $details[0]->salary;
        $data['ucode'] = $details[0]->codeskills;
        $data['uphone'] = $details[0]->phone;
        $data['ugit'] = $details[0]->github;
        $data['ulink'] = $details[0]->linkedin;
    }
*/
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
            'password' => $this->input->post('password'),
            'company' => $this->input->post('company'),
            'salary' => $this->input->post('salary'),
            'codeskills' => $this->input->post('codeskills'),
            'phone' => $this->input->post('phone'),
            'location' => $this->input->post('location'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment'),

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

        public function index3()
        {
        $this->data['posts'] = $this->user_model->getPosts(); // calling Post model method getPosts()
         $this->load->view('home', $this->data); //load the view file , we are passing $data array to view file
        }
}