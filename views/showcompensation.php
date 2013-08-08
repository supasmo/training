<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $compensation->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $compensation->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatecompensation/'.$compensation->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/compensationtask'); ?>"><?php echo __('Cancel'); ?></a>
</div>
