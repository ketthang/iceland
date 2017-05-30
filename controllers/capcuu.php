<?php

class Capcuu extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('capcuu/index');
    }


}
?>
