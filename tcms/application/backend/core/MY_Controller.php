<?php
class MY_Controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$loginId = $this->session->userdata('UserName');
		if(empty($loginId)){
			redirect('admin/login');
		}
	}
	
	
	
}