<?php
class User extends MY_Controller {
	
	public function  User(){
		parent::__construct();
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	public function index()
	{
		header('Content-Type: text/html; charset=UTF-8');
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		
		$con = mysql_connect("localhost","root","blabla1234");
		mysql_select_db("scra", $con);
		$result = mysql_query("SELECT * FROM users");
		print_r($result);
		
		$this->load->model('user_model', 'user');
		$data['user'] = $this->user->getUsers();
		$this->load->view('header');
		$this->load->view('user', $data);
	}
	
	public function add(){
	
	    $data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
	    $this->load->model('user_model', 'user');
	    $data['role'] = $this->user->getRole();
		$this->load->view('header');
		$this->load->view('user_add', $data);
	}
	
	public function edit($id){
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->model('user_model', 'user');
		$data['role'] = $this->user->getRole();
		$data['user'] = $this->user->editUser($id);
		$this->load->view('header');
		$this->load->view('user_edit', $data);
	}
	
	public function save(){
		
		$this->load->model('user_model', 'user');
		$this->user->save();
		redirect('admin/user');
	}
	
	public function update(){

		$this->load->model('user_model', 'user');
		$this->user->update();
		redirect('admin/user');
	}
	
	public function delete(){

		$this->load->model('user_model', 'user');
		$this->user->delete();
		redirect('admin/user');
	
	}
	
	
}