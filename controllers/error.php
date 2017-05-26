<?php
class Error1 extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->msg='this page doesnt exist';
    }
    function index(){
        $this->view->render('error/index');
    }

}
