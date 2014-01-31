<?php
class Login extends CI_Controller {
	
	public function  Login(){
		parent::__construct();
	}
	
	public function index()
	{    
		 $loginId = $this->session->userdata('UserName');
		 if(!empty($loginId)){
		 	redirect('admin/home');
		 }
         $data['error'] = $this->session->userdata('error');
         $this->session->unset_userdata('error');
		 $this->load->view('login', $data);
	}
	
	public function validate(){

		$this->load->database();
		$error_msg = null;
		$log  = addslashes(trim($_POST['log']));
		$pwd  = addslashes(trim($_POST['pwd']));
		if(!empty($log)){
			$query = $this->db->query("select id, user_name, roleid, password from users where user_name ='$log'  LIMIT 1 ");
			if($row = $query->row()){
				if ($row->password == md5($pwd)) {
					 $queryRole = $this->db->query("select role_name, role_permission from roles where id ='{$row->roleid}'  LIMIT 1 ");
					 $rowRole = $queryRole->row();
					 $userPermission = explode(',', $rowRole->role_permission);
					 $_userPermission = array();
					 $permissionConstant = $this->config->item('model_permission');
					 foreach ($userPermission as $value){
					 	$_userPermission[] = $permissionConstant[$value];
					 }
					 $this->session->set_userdata(array('UserName' => $log, 'userId' => $row->id, 'userPermission' => json_encode($_userPermission)));
					 redirect('admin/home');
				}else{
					$error_msg = 'password not correct';
				}
				
			}else{
				$error_msg = 'login id not correct !';
			}
			
		}else{
			$error_msg = 'pls input your login id !';
		}
		$this->session->set_userdata(array('error' => $error_msg));
		redirect('admin/login');
	}
	
	function logout(){
		
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}