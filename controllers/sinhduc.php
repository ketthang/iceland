<?php

class Sinhduc extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('sinhduc/index');
    }
}
?>
