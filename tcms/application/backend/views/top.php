<?php 
$lang = $this->session->userdata('default_lang');
?>
<div class="mainhd">
	<div class="uinfo">
		<p>您好, <em><?php echo $this->session->userdata('UserName'); ?></em> [ <a href="<?php echo  base_url();  ?>admin/index.php?/login/logout" target="_top">退出</a> ]</p>
					
			</div>
</div>