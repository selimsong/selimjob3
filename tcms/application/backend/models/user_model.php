<?php

class user_model  extends CI_Model{
	

	function save(){
		$this->user_name = $_POST['user_name'];
		$this->password  = md5($_POST['user_password']);
		$this->email     = $_POST['user_email'];
		$this->roleid    = $_POST['role'];
		$this->db->insert('users', $this);
	}
	
	function getUsers(){
		$query = $this->db->query("select * from users");
		return $query->result();
	}
	
	function editUser($id){
		$query = $this->db->query("select id, user_name, email, roleid from users where id ='$id'  LIMIT 1 ");
		return $query->row();
	}
	
	function update($id){
		
		$id = $_POST['post_id'];
		$user_name =  $_POST['user_name'];
		$email     =  $_POST['user_email'];
		$password  =  $_POST['user_password'];
		$role      =  $_POST['role'];
		$_set = "set user_name='$user_name', email='$email', roleid='$role' ";
		if (!empty($password)) {
			$_set.= " , password = '".md5($password)."' ";
		}
		$sql = "update users  $_set  where id ='$id'  LIMIT 1 ";
		$query = $this->db->query($sql);
	}
	
	function delete(){
		$_in = implode(',', $_POST['delete']);
		$query = $this->db->query("delete from users where id in (" . $_in . ")  ");
	}
	
	function getRole(){
		$query = $this->db->query("select * from roles");
		$role = $query->result_array();
		$roleArray = array();
		foreach ($role as $value){
			$roleArray[$value['id']] = $value['role_name'];
		}
		return $roleArray;
	}
	
}