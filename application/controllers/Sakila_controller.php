<?php
defined("BASEPATH") or die("No direct script acess allowed");

class Sakila_controller extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('Sakila_Model');
        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);
    }
    public function update()
    {
        $this->load->model('Sakila_Model');
        $data_update = array();
        $data_update['last_name'] = "Shehzad";
        $data_update['last_update'] = "2019-07-24";
        $this->Sakila_Model->updatedata(6, $data_update);
        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);

    }
    public function deleat()
    {
        $this->load->model('Sakila_Model');

        $this->Sakila_Model->deleat_data(3);
        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);

    }
    public function orwhere()
    {
        $this->load->model("Sakila_Model");
        $update_data = array();
        $update_data['last_update'] = "2018-04-24";
        $this->Sakila_Model->orwhere(3, 'shahzaib', 'EID', $update_data);
        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);

    }
    public function multiwhere()
    {
        $this->load->model("Sakila_Model");
        $update_data = array();
        $update_data['last_update'] = "2018-04-24";
        $this->Sakila_Model->orwhere(4, 'NICK', 'WAHLBERG', $update_data);
        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);

    }
    public function between()
    {
        $this->load->model("Sakila_Model");

        $data['records'] = $this->Sakila_Model->getnewdata();
        $this->load->view('Sakila_view2', $data);
    }
    public function doubledate()
    {
        $this->load->model("Sakila_Model");

        $data['records'] = $this->Sakila_Model->getnewdata();
        $this->load->view('Sakila_view2', $data);
    }
    public function joins()
    {
        $this->load->model("Sakila_Model");

        $data['records'] = $this->Sakila_Model->getdata();
        $this->load->view('Sakila_view', $data);
    }

}