<?php

class Tiemthuoc extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('tiemthuoc/index');
    }


}
?>
