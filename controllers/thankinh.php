<?php

class Thankinh extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('thankinh/index');
    }
}
?>
