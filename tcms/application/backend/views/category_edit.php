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
				<div class="mainbox nomargin">
			<form action="<?php echo  base_url();  ?>admin/category/update" method="post">
				<table class="opt">
					<tr>
						<th colspan="1">Edit User</th>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" class="txt" name="category_name" value="<?php echo $category->category_name;  ?>" /></td>
					</tr>

				</table>
				<div class="opt">
				<input type="hidden" class="txt" name="category_id" value="<?php echo $category->id ?>" />
				<input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
             
             
		</td>
	</tr>
</table>
</body>
</html>