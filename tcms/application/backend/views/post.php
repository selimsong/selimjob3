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
			<form action="<?php echo  base_url();  ?>admin/post/delete"  method="post">
				
				<table class="datalist fixwidth">
					<tr>
						<th><input id="CheckAll" type="checkbox" /> <label> delete</label></th>
						<th>Title</th>
						<th>Auth</th>
						<th>Categories</th>
						<th>Date</th>
						<th>Edit</th>
					</tr>
					<?php
					   foreach ($post as $value){
					?>
					   <tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $value->id; ?>" class="mycheck" /></td>
							<td> <?php echo $value->title;  ?></td>
							<td><?php echo $value->user_name ?></td>
							<td><?php if(isset($category[$value->cate_id])) echo $category[$value->cate_id]; ?></td>
							<td><?php echo $value->date;  ?></td>
							<td><a href="<?php  echo site_url('/admin/post/edit/' . $value->id .'/'. $page); ?>">edit</a></td>
						</tr>
				  <?php }  ?>
				 
				 
				 	<tr class="nobg">
						<td>&nbsp;</td>
						<td class="tdpage" colspan="6"></td>
					</tr>	
					
				  	<tr class="nobg">
						<td></td>
						<td class="tdpage" colspan="1"><?php echo $this->pagination->create_links(); ?></td>
					</tr>				  	
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