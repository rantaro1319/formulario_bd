<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
       $this->load->view('inicio');
    }

    public function new_person()
    {
       $this->load->view('new_person');
    }

    public function listx()
    {
       $this->load->view('list');
    }

    public function editar($id = 0)
    {
      $this->load->view('new_person',['id'=>$id]);
    }

    public function borrar($id=0){

      core_persona::borrar($id);
      redirect('main/listx');

    }
}

/* End of file Main.php */
