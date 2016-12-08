<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 12/5/16
 * Time: 3:55 PM
 */


class Person extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->load->model('PersonModel');
        $persons=$this->PersonModel->get_last_ten_entries();
        $this->load->view('personlist',array('persons'=>$persons));
    }
    public function add()
    {
        $this->load->database();
        $this->load->model('PersonModel');

        $this->load->view('personadd');
    }
    public function edit($id)
    {
        $this->load->database();
        $this->load->model('PersonModel');
        $person=$this->PersonModel->get($id);
        $this->load->view('personedit',array('person'=>$person));
    }
    public function insert()
    {

        $this->load->database();
        $this->load->model('PersonModel');
        $this->PersonModel->insert_entry();

        $persons=$this->PersonModel->get_last_ten_entries();
        $this->load->view('personlist',array('persons'=>$persons));

    }
    public function update()
    {

        $this->load->database();
        $this->load->model('PersonModel');
        $this->PersonModel->update_entry();

        $persons=$this->PersonModel->get_last_ten_entries();
        $this->load->view('personlist',array('persons'=>$persons));

    }
    public function delete($id)
    {

        $this->load->database();
        $this->load->model('PersonModel');
        $this->PersonModel->delete_entry($id);

        $persons=$this->PersonModel->get_last_ten_entries();
        $this->load->view('personlist',array('persons'=>$persons));

    }
}
?>