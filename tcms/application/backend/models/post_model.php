<?php
class post_model  extends CI_Model{
	
	function save(){
		$this->title     = $_POST['post_title'];
		$this->content   = $_POST['post_content'];
		$this->cate_id   = $_POST['category'];
		$this->date      = date("y-m-d H:i:s" ,time()); 
		$this->user_name = $this->session->userdata('UserName');
		$this->db->insert('posts', $this);
	}

	function getPosts($limit, $start){
		
		$query = $this->db->query("select * from posts  order by date desc  limit $start, $limit  ");
        return $query->result();
	}
	
	function getPostsCount(){
		return $this->db->count_all("posts");
	}
	
	function getCategory(){
		$query = $this->db->query("select * from category");
		$cate = $query->result_array();
		$cateArray = array();
		foreach ($cate as $value){
			$cateArray[$value['id']] = $value['category_name'];
		}
		return $cateArray;
	}
	
	function editPost($id){
		$query = $this->db->query("select id, title, cate_id, content from posts where id ='$id'  LIMIT 1 ");
		return $query->row();
	}
	
	function delete(){
		$_in = implode(',', $_POST['delete']);
		$query = $this->db->query("delete from posts where id in (" . $_in . ")  ");
	}

	function update(){

		$title =  $_POST['post_title'];
		$content = $_POST['post_content'];
		$id = $_POST['post_id'];
        $cate_id = $_POST['category'];
        $user_name = $this->session->userdata('UserName');
		$query = $this->db->query("update posts set title='$title', cate_id='$cate_id', user_name='$user_name', content='$content' where id ='$id'  LIMIT 1 ");
	}
}