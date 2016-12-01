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
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('home');;
        $this->load->view('footer');

    }

    public function sites()
    {
        $this->load->helper('url');
        $this->load->helper('form');
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


    public function main()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('leftnav');
        $this->load->view('employers');

        $this->load->view('main');
        $this->load->view('footer');
    }

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library(array('session', 'form_validation'));

    }
    public function login()
    {
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('login_view');
        $this->load->view('leftnav');

        $this->load->view('main');
        $this->load->view('footer');
    }




}