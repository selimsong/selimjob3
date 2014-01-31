<?php
class Post extends MY_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->library('pagination');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}

	public function index()
	{ 
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->model('post_model', 'post');
		$config['base_url'] = base_url().'admin/post/index';
		$config['per_page'] = PER_PAGE;
		$config['total_rows'] = $this->post->getPostsCount();
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['post'] = $this->post->getPosts($config['per_page'], $data['page']);
		$data['category']  = $this->post->getCategory();
		$this->load->view('header');
		$this->load->view('post', $data);
	}
	
	
	public function add(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->model('post_model', 'post');
		$data['category']  = $this->post->getCategory();
		$this->load->view('header');
		$this->load->view('post_add', $data);
	}
	
	public function add2(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->model('post_model', 'post');
		$data['category']  = $this->post->getCategory();
		$this->load->view('header');
		$this->load->view('post_add2', $data);
	}
	
	public function edit($id, $page){
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$data['page'] = $page;
		$this->load->model('post_model', 'post');
		$data['category']  = $this->post->getCategory();
		$data['post'] = $this->post->editPost($id);
		$this->load->view('header');
		$this->load->view('post_edit', $data);
	}
	
	public function delete(){
		$this->load->model('post_model', 'post');
		$this->post->delete();
		redirect('admin/post');
	}
	
	public function update(){
		
        $page = $_POST['current_page'];
		$this->load->model('post_model', 'post');
		$this->post->update();
		redirect('admin/post/index/'.$page);
	}
	
	public function save(){
		
		$uploadfile =  '../upload/'.basename($_FILES['pictures']['name']);
		if (move_uploaded_file($_FILES['pictures']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Possible file upload attack!\n";
		}
		
		$this->load->model('post_model', 'post');
		$this->post->save();
		redirect('admin/post');
	}
	
	public function upload(){
		
		$this->load->view('upload');
	}
	
	public function uploadsave(){
		$uploadfile =  '../upload/'.basename($_FILES['pictures']['name']);
		if (move_uploaded_file($_FILES['pictures']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Possible file upload attack!\n";
		}
	}
	

	public function tinymce(){
		$this->load->view('tinymce');
		
	}
	
	public function niceedit(){
		
		$this->load->view('niceEdit');
	}


}