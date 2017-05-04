<?php

class Picture extends CI_Controller{

   
   function __construct(){
		parent::__construct();
		  $this->load->model('category_model');
	}

  public function upload(){
     $this->load->view('inc/header.php');
     $this->load->view('upload.php');
     $category['records'] = $this->category_model->fetch_category();
     $this->load->view('inc/footer.php',$category);
  }

  public function display_image(){
      
  }
}