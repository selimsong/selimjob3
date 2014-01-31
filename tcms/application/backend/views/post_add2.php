<script type="text/javascript">
	 var base_url = '<?php echo  base_url();  ?>';
</script>
<script type="text/javascript" src="<?php echo  base_url();  ?>js/nicEdit.js"></script>
<script type="text/javascript">
	//bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	bkLib.onDomLoaded(function() { 
			new nicEditor({
				iconsPath: base_url +'images/nicEditorIcons.gif',
				uploadURI : base_url + 'upload/nicUpload.php', 
			}).panelInstance('content');

		});
</script>
<body scroll="no">
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td colspan="2" height="60">
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
			<form action="<?php echo  base_url();  ?>admin/post/save" method="post"  enctype="multipart/form-data">
				<input type="hidden" name="formhash" value="d210453fca545649">
				<table class="opt">
					<tr>
						<th colspan="2">Add New Post2</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="post_title" value="" /></td>
						<td>input your title</td>
					</tr>

                    <tr>
						<th colspan="2">Categories</th>
					</tr>
					<tr>
						<td>
						<select name="category">
						     <?php  foreach ($category as $key => $value): ?>
						        <option value="<?php echo $key  ?>"><?php echo $value;  ?></option>
						     <?php endforeach;  ?>
						</select>
						</td>
					</tr>
					
					
					<tr>
						<th colspan="1"></th>
					</tr>
					<tr>
					<th colspan="2">
						<textarea class="wp-editor-area" style="height:378px;width:450px;" cols="40" name="post_content" id="content"></textarea>
					</th>
					 
					</tr>
					
					
					
					<tr>
						<th colspan="2">image</th>
					</tr>
					<tr>
						<td><iframe  src="<?php echo  base_url();  ?>admin/post/upload" height="80" width="450" frameborder="0"></iframe></td>
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