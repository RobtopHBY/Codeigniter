<?php

namespace App\Controllers;

class Projekte extends BaseController {
    public function create() {
        $data = $this->request->getPost();
       $this->load->model('ProjekteModel');
       $this->ProjekteModel->createProject('id', 'Project Description');
       $ProjekteModel = new \ProjekteModel();
       $ProjekteModel->createProject($data);
        echo('erfolg');

    }
    public function update() {
        $this->load->model('ProjekteModel');
        $this->ProjekteModel->updateProject(1, 'New Project Name', 'New Project Description');
    }

    public function index()
    {
        echo view('templates/header');
        echo view('Projekte/Projekte');
        echo view('templates/footer');
    }
}
