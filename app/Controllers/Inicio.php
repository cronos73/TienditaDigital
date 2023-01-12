<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        //return view('templates/header');

        echo view('templates/header');
        echo view('inicio_view');
        echo view('templates/footer');
        //$this->load->view('templates/header');
        //$this->load->view('inicio_view');
        //$this->load->view('templates/footer');
    }
}
?>