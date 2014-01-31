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
	
		<h3>Posts</h3>
		<div class="mainbox">
			<form action="<?php echo  base_url();  ?>admin/category/delete"  method="post">
				
				<table class="datalist fixwidth">
					<tr>
						<th><input id="CheckAll" type="checkbox" /> <label> delete</label></th>
						<th>Category Name</th>
						<th>Edit</th>
					</tr>
					<?php
					   foreach ($category as $value){
					?>
					   <tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $value->id; ?>" class="mycheck" /></td>
							<td> <strong><?php echo $value->category_name;  ?></strong></td>
							<td><a href="<?php  echo site_url('/admin/category/edit/' . $value->id); ?>">edit</a></td>
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