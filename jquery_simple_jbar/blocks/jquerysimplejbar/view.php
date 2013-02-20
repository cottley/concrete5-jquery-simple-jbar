<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
if (!$isEditMode) {
?>
<style media="screen" type="text/css">
<?php echo $csscontent; ?>
</style>
<?php
} else {
?><b>jQuery Simple JBar - Custom CSS Not activated in edit mode</b>
<?php 
}
?>