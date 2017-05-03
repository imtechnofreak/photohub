<?php


/**
* Model Implemention for User
*/
class User_model extends CI_Model
{
	

	public function get_user($email , $password){
		$param = array('email' => $email , 'password' => $password);
		$q = $this->db->where($param)
				->get('users');
		 if($q->num_rows() == 1){
		 	return $q->row()->id;
		 }
		 else{
		 	return false;
		 }		
	}

	public function insert_user($data){
	 $this->db->insert("users",$data);
	 if($this->db->affected_rows()>0){
		 return true;
	 }
	 else{
		 return false;
	 }
	}
}