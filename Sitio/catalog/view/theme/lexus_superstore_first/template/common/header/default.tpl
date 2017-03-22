<?php
	//call by framework Auto Search
	// $configsearch = $this->config->get('pavautosearch_module');
	// $autosearch = empty($configsearch)?'':$helper->renderModule( 'module/pavautosearch' );
	//$autosearch = null;

	// $verticalmenu = $this->config->get('pavverticalmenu_module');
	// $verticalmenu = empty($configsearch)?'':$helper->renderModule( 'module/pavverticalmenu' );
	$objlang = $this->registry->get('language');
 	
	$autosearch = $helper->renderModule( 'pavautosearch' );
	$megamenu = $helper->renderModule('pavmegamenu');

?>
<nav id="topbar">
  <div class="container">
  	<div class="inner">
  		<div class="row hidden-sm hidden-xs">
  			<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
  				<div class="login links">
  					<?php if ($logged) { ?>
						<a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a>
					<?php } else { ?>
						<a href="<?php echo $register; ?>"><?php echo $text_register; ?></a> or
						<a href="<?php echo $login; ?>"><?php echo $text_login; ?></a>		
    				<?php } ?>					
				</div>					
  			</div>
  			<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
  				<div class="pull-right">
	  				<ul class="links pull-left">
	  					<li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
	  					<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
	  					<li><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart;; ?></a></li>
	  					<li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
	  				</ul>
	  				<div class="btn-group">
						<button type="button" class="btn dropdown-toggle btn-theme-normal" data-toggle="dropdown">
							<i class="fa fa-cog"></i><?php echo $objlang->get("Setting"); ?><span class="fa fa-angle-down"></span>
						</button>
						<div class="quick-setting dropdown-menu">
							<div class="language">
								<?php echo $language; ?>
							</div>
							<div class="currency">
								<?php echo $currency; ?>
							</div>
						</div>											 	
					</div>	  				
				</div>
  			</div>
	    </div>
	</div> <!-- end inner -->
	<div class="show-mobile hidden-lg hidden-md">
		<div class="quick-cart pull-left">
			<div class="quickaccess-toggle">
				<a class="shoppingcart" href="<?php echo $shopping_cart; ?>"><span class="fa fa-shopping-cart"></span><span class="hide"><?php echo $text_shopping_cart; ?></span></a>	
			</div>
		</div>
		<div class="quick-user pull-left">
			<div class="quickaccess-toggle">
				<i class="fa fa-user"></i>															
			</div>	
			<div class="inner-toggle">
				<ul class="links pull-left">
					<?php if ($logged) { ?>
						<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
						<li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
					<?php } else { ?>
						<li><a href="<?php echo $register; ?>"><span class="fa fa-pencil"></span><?php echo $text_register; ?></a></li>
	    				<li><a href="<?php echo $login; ?>"><span class="fa fa-unlock"></span><?php echo $text_login; ?></a></li> 			
    				<?php } ?>		
				</ul>
			</div>						
		</div>
		<div class="quick-access pull-left">
			<div class="quickaccess-toggle">
				<i class="fa fa-list"></i>															
			</div>	
			<div class="inner-toggle">
				<ul class="links pull-left">
					<li><a class="wishlist" href="<?php echo $wishlist; ?>" id="wishlist-total"><i class="fa fa-heart"></i><?php echo $text_wishlist; ?></a></li>
					<li><a class="account" href="<?php echo $account; ?>"><span class="fa fa-user"></span><?php echo $text_account; ?></a></li>
					<li><a class="last checkout" href="<?php echo $checkout; ?>"><span class="fa fa-file"></span><?php echo $text_checkout; ?></a></li>	
				</ul>
			</div>						
		</div>
		<div class="access pull-left">
			<div class="quickaccess-toggle">
				<i class="fa fa-sun-o"></i>															
			</div>	
			<div class="inner-toggle quick-setting">
					<?php echo $language; ?>
					<?php echo $currency; ?>
			</div>						
		</div>
	</div>
  </div>
</nav>
<header id="header-main">
	<div class="row">	
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 logo inner">					
				<?php if( $logoType=='logo-theme'){ ?>
				<div id="logo-theme" class="logo-store">
					<a href="<?php echo $home; ?>">
						<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive"/>
					</a>
				</div>
				<?php } elseif ($logo) { ?>
				<div id="logo" class="logo-store">
					<a href="<?php echo $home; ?>">
						<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive"/>
					</a>
				</div>
				<?php } ?> 
			</div>
			<div id="search" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">									
				<?php
			 	if(isset($autosearch) &&  !empty($autosearch)) { ?>
			 	<div class="input-group">
					<div id="search-auto" class="search-auto search-wrappe">
						<?php echo $autosearch ?>
					</div> 
				</div>
				<?php } else { ?>
					<?php echo $search; ?>		
				<?php }  ?>				
			</div>
			<div class="col-lg-3 col-md-3 shopping-cart inner hidden-xs hidden-sm">
				<?php echo $cart; ?>
			</div>
		</div>
	</div>
</header>
<!-- menu -->  		  
	
<div id="pav-mainnav">
	<div class="container">
		<div class="mainnav-wrap">			
			<button data-toggle="offcanvas" class="btn btn-theme-default canvas-menu hidden-lg hidden-md" type="button"><span class="fa fa-bars"></span> Menu</button>
			<?php
			/**
			 * Main Menu modules: as default if do not put megamenu, the theme will use categories menu for main menu
			 */
			$modules = $helper->renderModule('pavmegamenu');

			if (count($modules) && !empty($modules)) { ?>

			    
			<?php echo $modules; ?>
			 

			<?php } elseif ($categories) { ?>

		    <div class="navbar navbar-inverse"> 
		        <nav id="mainmenutop" class="megamenu" role="navigation"> 
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-ex1-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="fa fa-bars"></span>
		                </button>
		            </div>

		            <div class="offcanvas navbar-collapse navbar-ex1-collapse hidden-sm hidden-xs">
		                <ul class="nav navbar-nav">
		                    <li><a href="<?php echo $home; ?>" title="<?php echo $objlang->get('text_home'); ?>"><?php echo $objlang->get('text_home'); ?></a></li>
			                    <?php foreach ($categories as $category) { ?>
			                        <?php if ($category['children']) { ?>			
			                            <li class="parent dropdown deeper ">
			                                <a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?>
			                                    <b class="fa fa-angle-down"></b>
			                                    <span class="triangles"></span>
			                                </a>
			                            </li>
			                            <?php } else { ?>
			                            <li>
			                                <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
			                            <?php } ?>
			                            <?php if ($category['children']) { ?>
			                                <ul class="dropdown-menu">
			                                    <?php for ($i = 0; $i < count($category['children']);) { ?>
			                                        <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
			                                        <?php for (; $i < $j; $i++) { ?>
			                                            <?php if (isset($category['children'][$i])) { ?>
			                                                <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
			                                            <?php } ?>
			                                        <?php } ?>
			                                    <?php } ?>
			                                </ul>
			                            <?php } ?>
			                        </li>
			                    <?php } ?>		                    
		                </ul>
		            </div>	
		        </nav>
		    </div>   
		<?php } ?>
		</div>
	</div>
</div>


	





