<?php

class Khamrang extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('khamrang/index');
    }


}
?>
