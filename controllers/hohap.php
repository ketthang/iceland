<?php

class Hohap extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('hohap/index');
    }
}
?>
