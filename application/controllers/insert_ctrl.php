<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/29/16
 * Time: 1:39 PM
 */




class insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
    function index() {

        $this->load->helper('url');
//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
        $this->form_validation->set_rules('firstname', 'firstname');

//Validating Email Field
        $this->form_validation->set_rules('lastname', 'lastname');

//Validating Mobile no. Field
        $this->form_validation->set_rules('email', 'email');

//Validating Address Field
        $this->form_validation->set_rules('password', 'password');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_view');
        } else {
//Setting values for tabel columns
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
//Transfering data to Model
            $this->insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $this->load->view('insert_view', $data);
        }
    }

}

?>

