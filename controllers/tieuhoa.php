<?php

class Tieuhoa extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('tieuhoa/index');
    }
}
?>
