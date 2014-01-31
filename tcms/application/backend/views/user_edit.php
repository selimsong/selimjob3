
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
			<form action="<?php echo  base_url();  ?>admin/user/update" method="post">
				<table class="opt">
					<tr>
						<th colspan="1">Edit User</th>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" class="txt" name="user_name" value="<?php echo $user->user_name;  ?>" /></td>
					</tr>

				   <tr>
						<td>Role:</td>
						<td>
							<select name="role">
							     <?php  foreach ($role as $key => $value): ?>
							        <option value="<?php echo $key  ?>"  <?php if($user->roleid == $key) echo "selected"; ?> ><?php echo $value;  ?></option>
							     <?php endforeach;  ?>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>E-mail:</td>
						<td><input type="text" class="txt" name="user_email" value="<?php echo $user->email;  ?>" /></td>
					</tr>
                    
                    <tr>
						<td>reset - Password:</td>
						<td><input type="password" class="txt" name="user_password" value="" />
						<input type="hidden" class="txt" name="post_id" value="<?php echo $user->id ?>" />
						</td>
					</tr>
					
				</table>
				<div class="opt"><input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
             
             
		</td>
	</tr>
</table>
</body>
</html>