<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        //$this->view->hurtList = $this->model->hurtList();
        $this->view->catalog = $this->model->catalog();
        $this->view->render('index/index');
    }
}
?>
