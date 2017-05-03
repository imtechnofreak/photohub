<?php

/**
* Home controller for routing
*/
class Home extends CI_Controller
{ 
	
	function __construct(){
		parent::__construct();
		  $this->load->model('category_model');
	}
	
	public function index(){
		$this->load->view('inc/header.php');
		$this->load->view('home.php');
		$category['records'] = $this->category_model->fetch_category();
		$this->load->view('inc/footer.php',$category);
	}

	public function register(){
		$this->load->view('inc/header.php');
		$this->load->view('register.php');
		$category['records'] = $this->category_model->fetch_category();
		$this->load->view('inc/footer.php',$category);
	}


	public function categories(){
		$this->load->view('inc/header.php');
		$this->load->view('stock.php');
		$category['records'] = $this->category_model->fetch_category();
		$this->load->view('inc/footer.php',$category);
	}


	public function single(){
		$this->load->view('inc/header.php');
		$this->load->view('single.php');
		$this->load->view('inc/footer.php');
	}
	public function pictures()
	{
		$this->load->view('inc/header.php');
		$this->load->view('picture_upload.php');
		$this->load->view('inc/footer.php');
	}
}


?>