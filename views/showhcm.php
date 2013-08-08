<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $hcm->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $hcm->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatehcm/'.$hcm->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/hcmtask'); ?>"><?php echo __('Cancel'); ?></a>
</div>
