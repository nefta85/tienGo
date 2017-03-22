<?php  echo $header; ?> <?php require( ThemeControlHelper::getLayoutPath( 'common/mass-header.tpl' )  ); ?>
<div class="container">
    
  <?php require( ThemeControlHelper::getLayoutPath( 'common/mass-container.tpl' )  ); ?>
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?></div>
  <?php } ?>
  <div class="row"><?php if( $SPAN[0] ): ?>
			<aside id="sidebar-left" class="col-md-<?php echo $SPAN[0];?>">
				<?php echo $column_left; ?>
			</aside>	
		<?php endif; ?> 
  
   <div id="sidebar-main" class="col-md-<?php echo $SPAN[1];?>"><div id="content"><?php echo $content_top; ?>
      <h2><?php echo $text_my_account; ?></h2>
      <ul class="list-unstyled">
        <li><a href="<?php echo $edit; ?>"><?php echo $text_edit; ?></a></li>
        <li><a href="<?php echo $password; ?>"><?php echo $text_password; ?></a></li>
        <li><a href="<?php echo $address; ?>"><?php echo $text_address; ?></a></li>
        <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
      </ul>
      <h2><?php echo $text_my_orders; ?></h2>
      <ul class="list-unstyled">
        <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
        <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
        <?php if ($reward) { ?>
        <li><a href="<?php echo $reward; ?>"><?php echo $text_reward; ?></a></li>
        <?php } ?>
        <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
        <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
        <li><a href="<?php echo $recurring; ?>"><?php echo $text_recurring; ?></a></li>
      </ul>

			    <h2><?php echo $ms_account_seller_account; ?></h2>
					<ul class="list-unstyled ms-sellermenu <?php if ($this->config->get('msconf_graphical_sellermenu')) { ?>graphical<?php } ?>">
                        <?php if ($ms_seller_created && $this->MsLoader->MsSeller->getStatus($this->customer->getId()) == MsSeller::STATUS_ACTIVE) { ?>
                            <li>
                                <a href="<?php echo $this->url->link('seller/account-dashboard', '', 'SSL'); ?>">
                                    <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                        <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-graph-96.png" />
                                    <?php } ?>
                                    <?php echo $ms_account_dashboard; ?>
                                </a>
                            </li>
                        <?php } ?>

                        <li>
                            <a href="<?php echo $this->url->link('seller/account-profile', '', 'SSL'); ?>">
                                <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                    <?php if ($ms_seller_created) { ?>
                                    <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-profile-96.png" />
                                    <?php } else { ?>
                                    <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-profile-plus-96.png" />
                                    <?php } ?>
                                <?php } ?>
                                <?php echo $ms_seller_created ? $ms_account_sellerinfo : $ms_account_sellerinfo_new; ?>
                            </a>
                        </li>

                        <?php if ( ($ms_seller_created) && ( ($this->MsLoader->MsSeller->getStatus($this->customer->getId()) == MsSeller::STATUS_ACTIVE) || ($this->config->get('msconf_allow_inactive_seller_products')) ) ) { ?>
                            <li>
                                <a href="<?php echo $this->url->link('seller/account-product/create', '', 'SSL'); ?>">
                                    <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                        <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-bag-plus-96.png" />
                                    <?php } ?>
                                    <?php echo $ms_account_newproduct; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url->link('seller/account-product', '', 'SSL'); ?>">
                                    <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                        <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-bag-96.png" />
                                    <?php } ?>
                                    <?php echo $ms_account_products; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($ms_seller_created && $this->MsLoader->MsSeller->getStatus($this->customer->getId()) == MsSeller::STATUS_ACTIVE) { ?>
                            <li>
                                <a href="<?php echo $this->url->link('seller/account-order', '', 'SSL'); ?>">
                                    <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                        <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-cart-96.png" />
                                    <?php } ?>
                                    <?php echo $ms_account_orders; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->url->link('seller/account-transaction', '', 'SSL'); ?>">
                                    <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                        <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-book-96.png" />
                                    <?php } ?>
                                    <?php echo $ms_account_transactions; ?>
                                </a>
                            </li>
                            <?php if ($this->config->get('msconf_allow_withdrawal_requests')) { ?>
                                <li>
                                    <a href="<?php echo $this->url->link('seller/account-withdrawal', '', 'SSL'); ?>">
                                        <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                            <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-dollar-96.png" />
                                        <?php } ?>
                                        <?php echo $ms_account_withdraw; ?>
                                    </a>
                                </li>
                            <?php } ?>
                                <li>
                                    <a href="<?php echo $this->url->link('seller/account-stats', '', 'SSL'); ?>">
                                        <?php if($this->config->get('msconf_graphical_sellermenu')) { ?>
                                            <img src="catalog/view/theme/<?php echo $this->config->get('config_template'); ?>/image/ms-stats-96.png" />
                                        <?php } ?>
                                        <?php echo $ms_account_stats; ?>
                                    </a>
                                </li>
                        <?php } ?>
					</ul>
			
      <h2><?php echo $text_my_newsletter; ?></h2>
      <ul class="list-unstyled">
        <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
      </ul>
      <?php echo $content_bottom; ?></div>
   </div> 
<?php if( $SPAN[2] ): ?>
	<aside id="sidebar-right" class="col-md-<?php echo $SPAN[2];?>">	
		<?php echo $column_right; ?>
	</aside>
<?php endif; ?></div>
</div>
<?php echo $footer; ?>