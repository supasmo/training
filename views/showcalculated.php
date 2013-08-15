<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $calculated->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $calculated->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatecalculated/'.$calculated->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/taskcalculated'); ?>"><?php echo __('Cancel'); ?></a>
</div>