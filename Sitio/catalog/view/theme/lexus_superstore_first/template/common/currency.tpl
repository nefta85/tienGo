<?php if (count($currencies) > 1) { ?>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="currency">
  <div class="box-currency">
    <label><?php echo $text_currency; ?></label>
    <?php foreach ($currencies as $currency) { ?>
    <?php if ($currency['code'] == $code) { ?>
    <?php if ($currency['symbol_left']) { ?>
    <a href="javascript:void(0);" title="<?php echo $currency['title']; ?>" data-name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_left'];?></a>
    <?php } else { ?>
    <a title="<?php echo $currency['title']; ?>" href="javascript:void(0);" data-name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_right']; ?></a>
    <?php } ?>
    <?php } else { ?>
    <?php if ($currency['symbol_left']) { ?>
    <a class="currency-select" href="javascript:void(0);" data-name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_left']; ?> </a>
    <?php } else { ?>
    <a class="currency-select" href="javascript:void(0);" data-name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_right']; ?> </a>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <input type="hidden" name="code" value= "" />
    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
  </div>
</form>
<?php } ?>