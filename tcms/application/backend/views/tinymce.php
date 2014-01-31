



<script type="text/javascript">
<!--
//Returns the value as string. Second arg or empty string is returned when value is not set.
function getUserSetting( name, def ) {
	var obj = getAllUserSettings();

	if ( obj.hasOwnProperty(name) )
		return obj[name];

	if ( typeof def != 'undefined' )
		return def;

	return '';
}

//Returns all settings as js object.
function getAllUserSettings() {
	if ( 'object' !== typeof userSettings )
		return {};

	return wpCookies.getHash('wp-settings-' + userSettings.uid) || {};
}

//-->
</script>

<link rel='stylesheet' id='editor-buttons-css'  href='http://localhost/jcms/css/editor.css' type='text/css' media='all' />



<div id="wp-content-editor-container" class="wp-editor-container">
<textarea class="wp-editor-area" style="height: 378px" cols="40" name="content" id="content"></textarea>
</div>
<script type="text/javascript">
		tinyMCEPreInit = {
			base : "http://localhost/jcms/js/tinymce",
			suffix : "",
			mceInit : {'content':{mode:"exact",width:"100%",theme:"advanced",skin:"wp_theme",language:"en",spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv",theme_advanced_toolbar_location:"top",theme_advanced_toolbar_align:"left",theme_advanced_statusbar_location:"bottom",theme_advanced_resizing:true,theme_advanced_resize_horizontal:false,dialog_type:"modal",formats:{
						alignleft : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'left'}},
							{selector : 'img,table', classes : 'alignleft'}
						],
						aligncenter : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'center'}},
							{selector : 'img,table', classes : 'aligncenter'}
						],
						alignright : [
							{selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles : {textAlign : 'right'}},
							{selector : 'img,table', classes : 'alignright'}
						],
						strikethrough : {inline : 'del'}
					},relative_urls:false,remove_script_host:false,convert_urls:false,remove_linebreaks:true,gecko_spellcheck:true,fix_list_elements:true,keep_styles:false,entities:"38,amp,60,lt,62,gt",accessibility_focus:true,media_strict:false,paste_remove_styles:true,paste_remove_spans:true,paste_strip_class_attributes:"all",paste_text_use_dialog:true,webkit_fake_resize:false,spellchecker_rpc_url:"http://localhost/wordpress/wp-includes/js/tinymce/plugins/spellchecker/rpc.php",schema:"html5",wpeditimage_disable_captions:false,wp_fullscreen_content_css:"http://localhost/wordpress/wp-includes/js/tinymce/plugins/wpfullscreen/css/wp-fullscreen.css",plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",content_css:"http://localhost/wordpress/wp-content/themes/twentytwelve/editor-style.css",elements:"content",wpautop:true,apply_source_formatting:false,theme_advanced_buttons1:"bold,italic,strikethrough,bullist,numlist,blockquote,justifyleft,justifycenter,justifyright,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv",theme_advanced_buttons2:"formatselect,underline,justifyfull,forecolor,pastetext,pasteword,removeformat,charmap,outdent,indent,undo,redo,wp_help",theme_advanced_buttons3:"",theme_advanced_buttons4:"",tabfocus_elements:"sample-permalink,post-preview",body_class:"content post-type-post",theme_advanced_resizing_use_cookie:false}},
			qtInit : {'content':{id:"content",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,more,spell,close,fullscreen"},'replycontent':{id:"replycontent",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close"}},
			ref : {plugins:"inlinepopups,spellchecker,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen",theme:"advanced",language:"en"},
			load_ext : function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
	</script>
	
<script type='text/javascript' src='http://localhost/jcms/js/tinymce/wp-tinymce.php?c=1'></script>

<script type="text/javascript">
				for ( ed in tinyMCEPreInit.mceInit ) {
					init = first_init = tinyMCEPreInit.mceInit[ed];
					try { tinymce.init(init); } catch(e){}
				}
</script>




