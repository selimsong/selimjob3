<?php
class setting_model  extends CI_Model{
		
    function index(){
    	$query = $this->db->query("select * from setting limit 0, 1");
    	if ($query->num_rows() > 0){
          return $query->row();	
    	}else{
    		$row = new stdClass();
    		$row->site_title = NULL;
    		return $row;
    	}
	}
	
	function save(){
		$query = $this->db->query("select id from setting limit 0, 1");
		$site_title = $_POST['site_title'];
		if ($query->num_rows() > 0){
			$row = $query->row();
			$id = $row->id;
			$query = $this->db->query("update setting set site_title='$site_title' where id ='$id'  LIMIT 1 ");
		}else{
			$this->site_title   = $site_title;
			$this->db->insert('setting', $this);
		}
	}
	

}