<?php 
$lang = $this->session->userdata('default_lang');
?>
<div class="mainhd">
	<div class="logo"> &nbsp;&nbsp;&nbsp; Administrator's Control Panel
	
	    &nbsp;&nbsp;&nbsp; select language  
	    <select name="language" id="language">
		  <option value="english"  >english</option>
		  <option value="chinese" <?php if('chinese' == $lang){ ?> selected<?php }  ?>>chinese</option>
		</select>  
	</div>
	<div class="uinfo">
	    
		<p>您好, <em><?php echo $this->session->userdata('UserName'); ?></em> [ <a href="<?php echo  base_url();  ?>admin/login/logout" target="_top">退出</a> ]</p>
					
			</div>
</div>
<script type="text/javascript">
$('#language').change(function(){
	window.location.href = '<?php echo  base_url();  ?>admin/lang/change/' + $(this).val();
});

</script>