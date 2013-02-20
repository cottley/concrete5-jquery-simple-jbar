<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?> 

<div style="margin-top:8px;">

<label for="csscontent"><?php echo t('Enter the CSS that should be used to customize the look of the notification bar')?></label>
 <?php echo $form->textarea("csscontent", $csscontent, array('rows' => 8, 'cols' => 50)); ?>
<br/>
</div>
<div class="ccm-spacer" style="margin-bottom:16px;"></div>