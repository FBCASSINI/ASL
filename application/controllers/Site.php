<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/24/16
 * Time: 2:42 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');

    }

    public function sites()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('leftnav');
        $this->load->view('site');
        $this->load->view('rightnav');
        $this->load->view('footer');
    }

    public function developers()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('leftnav');
        $this->load->view('developers');
        $this->load->view('rightnav');
        $this->load->view('footer');
    }

    public function employers()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('leftnav');
        $this->load->view('employers');
        $this->load->view('rightnav');
        $this->load->view('footer');
    }


}


/*

    public function add_form()

    {

        $this->load->view('insert');
    }

    public function insert_new_user(){




        $udata['email'] = $this->input->post('email');

        $udata['fname'] = $this->input->post('fname');

        $udata['lname'] = $this->input->post('lname');

        $udata['pwd'] = $this->input->post('pwd');

        $res = $this->users_model->insert_users_to_db($udata);

        if($res){

            header('location:'.base_url()."index.php".$this->index());

        }

    }


}
*/