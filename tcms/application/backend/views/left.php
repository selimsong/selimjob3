<?php 
$userPer = json_decode($this->session->userdata('userPermission'));
?>
<div id="adminmenuwrap">
<div id="adminmenushadow"></div>
<ul role="navigation" id="adminmenu">
	<li id="menu-dashboard" class="wp-first-item wp-has-submenu wp-not-current-submenu  menu-top-first menu-icon-dashboard menu-top-last">
		  <a aria-haspopup="true" class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-last" href="<?php  echo site_url('/admin/index.php?/home'); ?>">
			  <div class="wp-menu-arrow"><div></div></div>
			  <div class="wp-menu-image"><br></div><div class="wp-menu-name">Dashboard</div>
		  </a>

	<li id="menu-users" class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-users">
		<a aria-haspopup="true" class="wp-has-submenu wp-has-current-submenu menu-top menu-icon-users" href="#">
			<div class="wp-menu-arrow"><div></div></div>
			<div class="wp-menu-image"><br></div>
			<div class="wp-menu-name">用户管理</div>
		</a>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head">获奖用户</li>
			<li class="wp-first-item"><a class="wp-first-item" href="<?php  echo site_url('/admin/index.php?/user'); ?>">All Users</a></li>
		</ul>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head">所有用户</li>
			<li class="wp-first-item"><a class="wp-first-item" href="<?php  echo site_url('/admin/index.php?/user'); ?>">All Users</a></li>
		</ul>
	</li>
	
</ul>
</div>
<script type="text/javascript">
$("a.menu-top").click(function(){
	if($(this).hasClass('wp-has-current-submenu')){
		$(this).removeClass('wp-has-current-submenu');
		$(this).addClass('wp-not-current-submenu');
		$(this).parent().addClass('wp-not-current-submenu');
		$(this).parent().removeClass('wp-has-current-submenu');	
		$(this).parent().removeClass('wp-menu-open');
    }else{
    	$(this).addClass('wp-has-current-submenu');
    	$(this).removeClass('wp-not-current-submenu');
    	
    	$(this).parent().addClass('wp-has-current-submenu');
    	$(this).parent().addClass('wp-menu-open');
    	$(this).parent().removeClass('wp-not-current-submenu');
     }
    return false;
});


</script>
