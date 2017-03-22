<div class="box box-normal theme account">
  <div class="box-heading"><span><?php echo $heading_title; ?></span></div>

			    <div class="list-group">
			        <span class="list-group-item"><b><?php echo $ms_account_seller_account; ?></b></span>
                    <?php if ($ms_seller_created) { ?>
                    <?php if ($this->MsLoader->MsSeller->getStatus($this->customer->getId()) == MsSeller::STATUS_ACTIVE) { ?>
                        <a class="list-group-item" href="<?php echo $this->url->link('seller/account-dashboard', '', 'SSL'); ?>"><?php echo $ms_account_dashboard; ?></a>
                    <?php } ?>

				    <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-profile', '', 'SSL'); ?>"><?php echo $ms_account_sellerinfo; ?></a>
				
                    <?php if ($this->MsLoader->MsSeller->getStatus($this->customer->getId()) == MsSeller::STATUS_ACTIVE) { ?>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-product/create', '', 'SSL'); ?>"><?php echo $ms_account_newproduct; ?></a>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-product', '', 'SSL'); ?>"><?php echo $ms_account_products; ?></a>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-order', '', 'SSL'); ?>"><?php echo $ms_account_orders; ?></a>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-transaction', '', 'SSL'); ?>"><?php echo $ms_account_transactions; ?></a>
                        <?php if ($this->config->get('msconf_allow_withdrawal_requests')) { ?>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-withdrawal', '', 'SSL'); ?>"><?php echo $ms_account_withdraw; ?></a>
                        <?php } ?>
                        <a class="list-group-item" href= "<?php echo $this->url->link('seller/account-stats', '', 'SSL'); ?>"><?php echo $ms_account_stats; ?></a>
                    <?php } ?>
                    <?php } else { ?>
                        <a class="list-group-item" href="<?php echo $this->url->link('account/login', '', 'SSL'); ?>"><?php echo $text_login; ?></a>
                        <a class="list-group-item" href="<?php echo $this->url->link('account/register-seller', '', 'SSL'); ?>"><?php echo $ms_account_register_seller; ?></a>
                    <?php } ?>
				</div>
			
  <div class="box-content">
      
        <div class="list-group">

				<span class="list-group-item"><b><?php echo $ms_account_customer_account; ?></b></span>
			
          <?php if (!$logged) { ?>
          <li class="list-group-item"><a href="<?php echo $login; ?>" ><?php echo $text_login; ?></a></li> <li class="list-group-item"><a href="<?php echo $register; ?>" ><?php echo $text_register; ?></a></li> 
          <li class="list-group-item"><a href="<?php echo $forgotten; ?>" ><?php echo $text_forgotten; ?></a></li>
          <?php } ?>
          <li class="list-group-item"><a href="<?php echo $account; ?>" ><?php echo $text_account; ?></a></li>
          <?php if ($logged) { ?>
          <li class="list-group-item"><a href="<?php echo $edit; ?>" ><?php echo $text_edit; ?></a></li> <li class="list-group-item"><a href="<?php echo $password; ?>" ><?php echo $text_password; ?></a></li>
          <?php } ?>
          <li class="list-group-item"><a href="<?php echo $address; ?>" ><?php echo $text_address; ?></a></li> <li class="list-group-item"><a href="<?php echo $wishlist; ?>" ><?php echo $text_wishlist; ?></a></li> <li class="list-group-item"><a href="<?php echo $order; ?>" ><?php echo $text_order; ?></a></li> <li class="list-group-item"><a href="<?php echo $download; ?>" ><?php echo $text_download; ?></a></li> <li class="list-group-item"><a href="<?php echo $reward; ?>" ><?php echo $text_reward; ?></a></li> <li class="list-group-item"><a href="<?php echo $return; ?>" ><?php echo $text_return; ?></a></li> <li class="list-group-item"><a href="<?php echo $transaction; ?>" ><?php echo $text_transaction; ?></a></li> <li class="list-group-item"><a href="<?php echo $newsletter; ?>" ><?php echo $text_newsletter; ?></a></li><li class="list-group-item"><a href="<?php echo $recurring; ?>" ><?php echo $text_recurring; ?></a></li>
          <?php if ($logged) { ?>
          <li class="list-group-item"><a href="<?php echo $logout; ?>" ><?php echo $text_logout; ?></a></li>
          <?php } ?>
        </div>
    </div>
</div>
  
