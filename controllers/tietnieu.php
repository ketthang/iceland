<?php

class Tietnieu extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('tietnieu/index');
    }
}
?>
