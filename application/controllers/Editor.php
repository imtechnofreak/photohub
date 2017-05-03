<?php

class Editor extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('category_model');
      if(!$this->session->userdata('user_id'))
      {
          return redirect(base_url());
      }
  }
  public function index(){
       $this->load->view('inc/header.php');
       $this->load->view('editor.php');
       $category['records'] = $this->category_model->fetch_category();
		$this->load->view('inc/footer.php',$category);
  }    
}


?>