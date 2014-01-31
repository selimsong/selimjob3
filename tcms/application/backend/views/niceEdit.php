<html>
<head>
	<title>Demo 1 : Convert All Textareas</title>
</head>
<body>

<div id="menu"></div>

<div id="intro">
By calling the nicEditors.allTextareas() function the below example replaces all 3 textareas on the page with nicEditors. NicEditors will match the size of the editor window with the size of the textarea it replaced.
</div>
<br />

<div id="sample">
<script type="text/javascript">
	 var base_url = '<?php echo  base_url();  ?>';
</script>
<script type="text/javascript" src="<?php echo  base_url();  ?>js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { new niceEditor({
		         }).panelInstance(); });
</script>

<h4>First Textarea</h4>
<textarea name="area1" cols="40"></textarea>
<br />

<h4>Second Textarea</h4>
<textarea name="area2" style="width: 100%;">
	Some Initial Content was in this textarea
</textarea>
<br />

<h4>Third Textarea</h4>
<textarea name="area3" style="width: 300px; height: 100px;">
	HTML <b>content</b> <i>default</i> in textarea
</textarea>
</div>

</body>
</html>