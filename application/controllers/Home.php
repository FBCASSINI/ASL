<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/30/16
 * Time: 10:20 AM
 */


class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->library('session');
        $this->load->helper('url');
    }

    function index()

    {

    }

    function logout()
    {
        // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('Site/index');
    }
}
?>