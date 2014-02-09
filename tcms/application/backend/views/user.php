<script type="text/javascript">
$(document).ready(function(){
	$("#CheckAll").change(function() {
		var $input = $(this);
		if($input.prop('checked')){
	        $('.mycheck').prop('checked', true);
	    }
	    else{   
	        $('.mycheck').prop('checked', false);
	    }

	}).change();
	
});				
</script>
<body scroll="no">
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td colspan="2">
		     <?php  $this->load->view('top');  ?>
		</td>
	</tr>
	<tr>
		<td valign="top" width="160">
		    <?php  $this->load->view('left');  ?>
		</td>
		
		<td valign="top">
		   <div class="container">
	
		<h3>提交信息用户</h3>
		<a href="<?php echo  base_url();  ?>excel/get.php">点击下载Excel数据</a>
		<div class="mainbox">
			<form action="<?php echo  base_url();  ?>admin/user/delete"  method="post">
				
				<table class="datalist fixwidth">
					<tr>
						<th>id: </th>
						<th>user name</th>
						<th>获奖类型</th>
						<th>phone</th>
						<th>email</th>
						<th>用户地址</th>
						<th>ip地址</th>
						<th>创建时间</th>
					</tr>
					<?php
					   $uCount = count($user);
					   foreach ($user as $value){
				            $winT = $style = '';
                            $type = substr(base64_decode($value['wintype']), 0,3);
                            if('wia' == $type){
                            	$winT ="获水杯";
                            }elseif ('wib' == $type){
                            	$winT ='获T';
								$style = 'style="background-color:yellow"';
                            }
					?>
					   <tr>
							<td class="option" <?php echo $style; ?>><?php echo $uCount;  $uCount--; ?></td>
							<td <?php echo $style; ?>><strong><?php echo $value['name'];  ?></strong></td>
							<td <?php echo $style; ?>><strong>
							 <?php echo $winT ?>
							</strong></td>
							<td <?php echo $style; ?>><?php echo $value['phone'];  ?></td>
							<td <?php echo $style; ?>><?php echo $value['email'];  ?></td>
							<td <?php echo $style; ?>><?php echo $value['address'];  ?></td>
							<td <?php echo $style; ?>><?php echo $value['ipaddress'];  ?></td>
							<td <?php echo $style; ?>><?php echo date("Y-m-d H:i:s",$value['createtime']);  ?></td>
						</tr>
				  <?php }  ?>				
					  <tr class="nobg">
						<td><input type="submit" value="submit" class="btn" /></td>
						<td class="tdpage" colspan="6"></td>
					</tr>
				</table>
				</form>
					</div>
	</div>     
		</td>
	</tr>
</table>

</body>
</html>