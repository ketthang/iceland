<?php

class Admin extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location:'.URL.'login');
			exit;
		}
		$this->view->js = array('admin/js/default.js');
	}
	
	function index() 
	{	
                $this->view->catalog = $this->model->catalog();
		$this->view->render('admin/index');
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
        public function catalogAdd(){
              //$this->view->render('admin/index');
            $data=array();
            $data['nameIS']=$_POST['txtNameIS'];
            $data['nameVN']=$_POST['txtNameVN'];
            $data['image']= $this->model->uploadImage();
            $data['link']=$_POST['txtLink'];
            $this->model->catalogAdd($data);
            header('location: '.URL.'admin');
        }

        public function create() 
	{
		$data = array();
                $data['image']= $this->model->uploadImage();
                $data['sound']=$this->model->uploadSound();
		$data['vietnam'] = $_POST['txtVietnam'];
		$data['iceland'] = $_POST['txtIceland'];
		
		// @TODO: Do your error checking!
//                print_r($data);
		
		$this->model->create($data);
		header('location: ' . URL . 'admin');
	}
	
	function xhrInsert()
	{
		$this->model->xhrInsert();
	}
	
	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}

}