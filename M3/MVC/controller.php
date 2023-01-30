<?php

include_once('model.php');

class Controller {
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function getlist() {
        $persons = $this->model->listPerson();
        include 'view.php';
    }
}