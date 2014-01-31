<?php
class Category extends MY_Controller {
	
	public function  Category(){
		parent::__construct();
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	public function index()
	{
	
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('category_model', 'category');
		$data['category'] = $this->category->getCategory();
		$this->load->view('header');
		$this->load->view('category', $data);
	}
	
	public function add(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('category_add', $data);
	}
	
	public function edit($id){
	
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('category_model', 'category');
		$data['category'] = $this->category->editCategory($id);
		$this->load->view('header');
		$this->load->view('category_edit', $data);
	}
	
	public function update(){
	
		$this->load->database();
		$this->load->model('category_model', 'category');
		$this->category->update();
		redirect('admin/category');
	}
	
	
	public function delete(){
		$this->load->database();
		$this->load->model('category_model', 'category');
		$this->category->delete();
		redirect('admin/category');
	}
	
	public function save(){
		
		$this->load->database();
		$this->load->model('category_model', 'category');
		$this->category->save();
		redirect('admin/category');
	}
	
	
	
	
}