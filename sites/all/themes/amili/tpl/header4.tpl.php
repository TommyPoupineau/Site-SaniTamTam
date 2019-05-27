<header id="nav" class="header header-4">
	<div class="header-wrapper">
		<div class="container">
			<div class="logo-row">
				
				<!-- LOGO -->
				<div class="logo-container-2">
					<a href="<?php print base_path(); ?>">
						<div class="logo-2">
							<img src="<?php print base_path().path_to_theme(); ?>/images/logo-alt.png" class="logo-img" alt="Logo" title="<?php print $site_name; ?>">
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
							<?php print render($page['main_menu']); ?>
							<!-- SEARCH READ DOCUMENTATION -->
							<div id="sb-search" class="search sb-search right hide-respons ">
								<?php print render($page['search']); ?>
							</div>
							
						</nav>
					</div>
					</div><!-- main-menu -->
					</div><!-- container -->
					
					</div><!--main-menu-container -->
					
					</div><!-- header-wrapper -->
					</header><!-- header -->