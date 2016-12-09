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
        if (!isset($details[0])){
            $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
            $data['uname'] = $details[0]->firstname . " " . $details[0]->lastname;
            $data['uemail'] = $details[0]->email;
            $data['uimage'] = $details[0]->image;
            $this->load->view('profile_view', $data);}

    }

    function delete()
    {
        $this->user_model->delete_row($this->session->userdata('uid'));
        redirect('Site/index');

    }

    function update()
    {

        $this->user_model->update($this->input->post("name"), $this->session->userdata('uid'));
        $this->user_model->update($this->input->post("email"), $this->session->userdata('uid'));
        $this->user_model->add_image($this->input->post('userfile'), $this->session->userdata('uid'));
        redirect('profile/index');

    }


    public function index1()
    {
        $this->load->view('profile_view', array('error' => ' '));
    }

    public function do_upload()
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);



            $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
            $data['uname'] = $details[0]->firstname . " " . $details[0]->lastname;
            $data['uemail'] = $details[0]->email;


        if (!$this->upload->do_upload('userfile')) {
            $data['error'] = $this->upload->display_errors();
            $this->load->view('profile_view', $data);
        } else {
            $upload_data = $this->upload->data();
            $images_name = $upload_data['file_name'];
            //update user photo intro database
            $this->user_model->add_image($images_name, $this->session->userdata('uid'), $upload_data['file_name']);

            $data['upload_data'] = $upload_data;
            $data['uid'] = $this->session->userdata('uid');
            $this->load->view('profile_view', $data);

        }

    }
}