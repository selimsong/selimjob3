<?php
class role_model  extends CI_Model{
	
	function getRoles(){
	
		$query = $this->db->query("select * from roles");
		return $query->result();
	}
	
	function editRole($id){
		$modle_permission = $this->config->item('model_permission');
		
		$query = $this->db->query("select id, role_name, role_permission from roles where id ='$id'  LIMIT 1 ");
		$role = $query->result_array();
		$_role = array();
		foreach ($role as $value){
			$role_permission = explode(',', $value['role_permission']);
			$_role_permission = array();
			foreach ($role_permission as $v){
				$_role_permission[] = $modle_permission[$v];
			}
			$_role = array('role_name'=>$value['role_name'], 'id' => $value['id'], 'role_permission' => $_role_permission);
		}
		
		return $_role;
	}
	
	function save(){

		 $modle_permission = $this->config->item('model_permission');
		 $permission = array();
		 foreach ($_POST['set'] as $key => $value){
		 	if(1 == $value){
		 		$permission[] = array_search($key, $modle_permission);
		 	}
		 }

		 $this->role_name          = $_POST['user_name'];
		 $this->role_permission    = implode(',', $permission);
		$this->db->insert('roles', $this);
	}
	
	function update(){
	
		$modle_permission = $this->config->item('model_permission');
		$permission = array();
		foreach ($_POST['set'] as $key => $value){
			if(1 == $value){
				$permission[] = array_search($key, $modle_permission);
			}
		}
		
		$role_name          = $_POST['user_name'];
		$role_permission    = implode(',', $permission);
		$id                 = $_POST['role_id'];

		$query = $this->db->query("update roles set role_name='$role_name', role_permission='$role_permission' where id ='$id'  LIMIT 1 ");
	}
	
	
}