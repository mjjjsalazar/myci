<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function add() {
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/add');
        $this->load->view('item/end');
        
    }

    public function delete() {
        $id = $this->uri->segment(1);
        $this->ItemModel->delete($id);
        redirect('item/index');

    }


    public function store(){
        $items = $this->input->post();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name', 'required|is_unique[tblitem.name]');
        if($this->form_validation->run() == FALSE)
    {
        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/add');
        $this->load->view('item/end');

    }

    else
    {

        $this->ItemModel->insert($items);
        redirect('item/index');
        //$this->diedump($items);
    }

    }

    public function index() {
        //echo 'Welcome to CI';
        $message = "ABC Item Management";
        //$items = ["apple", "orange", "mango", "banana"];

        $items = $this->ItemModel->getItems();
        //$this->diedump($items);

        
        $this->load->view('item/start');
        $this->load->view('item/nav');
        $this->load->view('item/index',compact('message', 'items')); 
        $this->load->view('item/end');
    }

    public function diedump($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

}//end
