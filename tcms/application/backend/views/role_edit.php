<?php 
function getAllowWithDis($t, $permission){
	$allo = array('allow' => null, 'disallow' => null);
	if (in_array($t, $permission)) {
		$allo['allow']    = "checked";
	}else{
		$allo['disallow'] = "checked";
	}
	return $allo;
}
?>
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
			<form action="<?php echo  base_url();  ?>admin/role/update" method="post">
				<table class="opt">
					<tr>
						<th colspan="1">Role Edit</th>
					</tr>
					<tr>
						<td>Rolename:</td>
						<td><input type="text" class="txt" name="user_name" value="<?php echo $role['role_name'];  ?>" /></td>
					</tr>

					<tr>
						<td>Permission setting:</td>
						<td></td>
					</tr>

                    <tr>
						<td>Posts view:</td>
						<td>
						<?php 
					   	     $allo =  getAllowWithDis('post', $role['role_permission']);
						 ?>
						<input type="radio" name="set[post]" value="1"  <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[post]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						 </td>
					</tr>
                    
                    <tr>
						<td>Post add:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('postadd', $role['role_permission']);
						 ?>
						<input type="radio" name="set[postadd]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[postadd]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						 </td>
					</tr>
					
					<tr>
						<td>Post edit:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('postedit', $role['role_permission']);
						 ?>
						<input type="radio" name="set[postedit]" value="1"  <?php echo $allo['allow'] ?>/> allow
						<input type="radio" name="set[postedit]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
                    <tr>
						<td>Post delete:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('postdelete', $role['role_permission']);
						 ?>
						<input type="radio" name="set[postdelete]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[postdelete]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
                    <tr>
						<td>User view:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('user', $role['role_permission']);
						 ?>
						<input type="radio" name="set[user]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[user]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
                    <tr>
						<td>User add:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('useradd', $role['role_permission']);
						 ?>
						<input type="radio" name="set[useradd]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[useradd]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
                    <tr>
						<td>User edit:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('useredit', $role['role_permission']);
						 ?>
						<input type="radio" name="set[useredit]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[useredit]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
					
				    <tr>
						<td>role:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('role', $role['role_permission']);
						 ?>
						<input type="radio" name="set[role]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[role]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
                    <tr>
						<td>role add:</td>
						<td>
						<?php 
						   $allo =  getAllowWithDis('roleadd', $role['role_permission']);
						 ?>
						<input type="radio" name="set[roleadd]" value="1" <?php echo $allo['allow'] ?> /> allow
						<input type="radio" name="set[roleadd]" value="0" <?php echo $allo['disallow'] ?> /> disallow
						</td>
					</tr>
                    
					
				</table>
				<div class="opt">
				<input type="hidden" class="txt" name="role_id" value="<?php echo $role['id']; ?>" />
				<input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
             
             
		</td>
	</tr>
</table>
</body>
</html>