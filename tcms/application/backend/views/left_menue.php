	<li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	<a href='home' class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" >
	<div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div>
	<div class='wp-menu-name'>Dashboard</div>
	</a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Dashboard</li>
	<li class="wp-first-item current">
	<a href='<?php echo  base_url();  ?>admin/home' class="wp-first-item current">Home</a></li>
	</ul>
	</li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" id="menu-posts">
	<a href='edit.php' class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" aria-haspopup="true">
	<div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div>
	<div class='wp-menu-name'>Posts</div></a>
	<ul class='wp-submenu wp-submenu-wrap'>
	<li class='wp-submenu-head'>Posts</li>
	<li class="wp-first-item"><a href='<?php echo  base_url();  ?>admin/post' class="wp-first-item">All Posts</a></li>
	<li><a href='<?php echo  base_url();  ?>admin/post/add'>Add New</a></li>
	<li><a href='edit-tags.php?taxonomy=category'>Categories</a></li><li><a href='edit-tags.php?taxonomy=post_tag'>Tags</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
	<a href='upload.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Media</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Media</li><li class="wp-first-item"><a href='upload.php' class="wp-first-item">Library</a></li><li><a href='media-new.php'>Add New</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	<a href='edit.php?post_type=page' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Pages</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Pages</li><li class="wp-first-item"><a href='edit.php?post_type=page' class="wp-first-item">All Pages</a></li><li><a href='post-new.php?post_type=page'>Add New</a></li></ul></li>
	<li class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" id="menu-comments">
	<a href='edit-comments.php' class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Comments <span class='awaiting-mod count-0'><span class='pending-count'>0</span></span></div></a></li>
	<li class="wp-not-current-submenu wp-menu-separator"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
	<a href='themes.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Appearance</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Appearance</li><li class="wp-first-item"><a href='themes.php' class="wp-first-item">Themes</a></li><li><a href='widgets.php'>Widgets</a></li><li><a href='nav-menus.php'>Menus</a></li><li><a href='themes.php?page=custom-header'>Header</a></li><li><a href='themes.php?page=custom-background'>Background</a></li><li><a href='theme-editor.php'>Editor</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
	<a href='plugins.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-plugins" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Plugins <span class='update-plugins count-0'><span class='plugin-count'>0</span></span></div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Plugins <span class='update-plugins count-0'><span class='plugin-count'>0</span></span></li><li class="wp-first-item"><a href='plugins.php' class="wp-first-item">Installed Plugins</a></li><li><a href='plugin-install.php'>Add New</a></li><li><a href='plugin-editor.php'>Editor</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
	<a href='users.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Users</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Users</li><li class="wp-first-item"><a href='users.php' class="wp-first-item">All Users</a></li><li><a href='user-new.php'>Add New</a></li><li><a href='profile.php'>Your Profile</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" id="menu-tools">
	<a href='tools.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Tools</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Tools</li><li class="wp-first-item"><a href='tools.php' class="wp-first-item">Available Tools</a></li><li><a href='import.php'>Import</a></li><li><a href='export.php'>Export</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
	<a href='options-general.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image'><br /></div><div class='wp-menu-name'>Settings</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head'>Settings</li><li class="wp-first-item"><a href='options-general.php' class="wp-first-item">General</a></li><li><a href='options-writing.php'>Writing</a></li><li><a href='options-reading.php'>Reading</a></li><li><a href='options-discussion.php'>Discussion</a></li><li><a href='options-media.php'>Media</a></li><li><a href='options-permalink.php'>Permalinks</a></li></ul></li><li id="collapse-menu" class="hide-if-no-js"><div id="collapse-button"><div></div></div><span>Collapse menu</span></li></ul>
