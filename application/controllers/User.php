<?php

/**
* UserController
*/
class User extends CI_Controller
{
	public function login(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|valid_email|min_length[8]|max_length[25]');
        $this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('user_model');
			$login = $this->user_model->get_user($email,$password);
			if ($login) {
				$this->session->set_userdata('user_id',$login);
				return redirect('Editor');
			}
			else{
				 $this->session->set_flashdata('login_failed','Invalid Username/Password');
				 redirect(current_url());
			}							
		}
		else{
			redirect (base_url());
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('Home');
	}

	public function signup(){
	 $data = array
	 (
	  'first_name' => $this->input->post('first_name'),
	  'last_name' => $this->input->post('last_name'),
	  'email'=>$this->input->post('email'),
	  'password'=>$this->input->post('password')	 
	 );		 
	      $this->load->model('user_model');
		 $result = $this->user_model->insert_user($data);
		 if($result == true){
			 $login = $this->user_model->get_user($data['email'],$data['password']);
			 if($login){
				 $this->session->set_userdata('user_id',$login);
				return redirect('Editor');	
			 }
			 else{
               return redirect (base_url());
			 }
		 }
		 else{
			 return	redirect(base_url());
		 }
	}

	
}


?>