<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location:'.URL.'login');
			exit;
		}
		$this->view->js = array('dashboard/js/default.js');
	}
	
	function index() 
	{	
		$this->view->render('dashboard/index');
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
        public function create() 
	{
		$data = array();
                $data['image']= $this->model->uploadImgae();
                $data['sound']=$this->model->uploadSound();
		$data['vietnam'] = $_POST['txtVietnam'];
		$data['iceland'] = $_POST['txtIceland'];
		
		// @TODO: Do your error checking!
//                print_r($data);
		
		$this->model->create($data);
		header('location: ' . URL . 'dashboard');
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