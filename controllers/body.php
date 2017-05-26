<?php

class Body extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('body/index');
    }


}
?>
