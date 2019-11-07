<header id="nav" class="header header-1 header-no-bg">
	<div class="header-wrapper ">
		<div class="container">
			<div class="logo-row">
				<!-- LOGO -->
				<div class="logo-container">
					<a href="<?php echo base_path(); ?>">
						<div class="logo">
							<?php if ($logo) {
    echo '<img src="'.$logo.'" class="logo-img" alt="Logo" title="'.$site_name.'">';
} else {
    echo $site_name;
} ?>
						</div>
					</a>
				</div>
				<!-- BUTTON -->
				<div class="menu-btn-respons-container">
					<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".main-menu .navbar-collapse">
					<span class="text">MENU</span>
					<span aria-hidden="true" class="icon_menu main-menu-icon"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="main-menu-container">
			
			<div class="container">
				<!-- MAIN MENU -->
				<div class="main-menu">
					<div class="navbar navbar-default" role="navigation">
						<!-- MAIN MENU LIST-->
						<nav class="collapse collapsing navbar-collapse right">
							<?php echo render($page['main_menu']); ?>
							<!-- SEARCH READ DOCUMENTATION -->
							<div id="sb-search" class="search sb-search right hide-respons ">
								<?php echo render($page['search']); ?>
							</div>
										<div class="connexion_links">
			
											<?php if (!user_is_logged_in()) {
    ?>
									<?php
                                    $menu = menu_navigation_links('menu-connexion-inscription');
    echo theme('links__menu_user_page', array('links' => $menu)); ?>
								<?php
} else {
        ?> 
									<?php
                                    $menu = menu_navigation_links('user-menu');
        echo theme('links__menu_user_page', array('links' => $menu)); ?>
								<?php
    } ?>
										</div>
							
						</nav>
					</div>
					</div><!-- main-menu -->
					</div><!-- container -->
					
					</div><!--main-menu-container -->
					
					</div><!-- header-wrapper -->
					</header><!-- header -->