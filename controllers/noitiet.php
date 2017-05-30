<?php

class Noitiet extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('noitiet/index');
    }
}
?>
