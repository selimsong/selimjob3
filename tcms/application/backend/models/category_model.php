<?php
class category_model  extends CI_Model{
	
	function save(){
		
		$this->category_name  = $_POST['category_name'];
		$this->db->insert('category', $this);
	}
	
	function getCategory(){
	
		$query = $this->db->query("select * from category");
		return $query->result();
	}
	
	function editCategory($id){
		
		$query = $this->db->query("select id, category_name from category where id ='$id'  LIMIT 1 ");
		return $query->row();
	}
	
	function delete(){
		$_in = implode(',', $_POST['delete']);
		$query = $this->db->query("delete from category where id in (" . $_in . ")  ");
	}
	
	function update(){
	
		$category_name =  $_POST['category_name'];
		$id = $_POST['category_id'];
	
		$query = $this->db->query("update category  set category_name='$category_name'  where id ='$id'  LIMIT 1 ");
	}
	
}