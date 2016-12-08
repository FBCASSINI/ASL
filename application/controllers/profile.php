<?php
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');


    }

    function index()
    {
        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $data['uname'] = $details[0]->firstname . " " . $details[0]->lastname;
        $data['uemail'] = $details[0]->email;
        $this->load->view('profile_view', $data);
    }

    function delete()
    {
        $this->user_model->delete_row($this->session->userdata('uid'));
        redirect('Site/index');

    }

    function update() {

        $this->user_model->update($this->input->post("name"), $this->session->userdata('uid'));
        $this->user_model->update($this->input->post("email"), $this->session->userdata('uid'));
        redirect('profile/index');

    }
}