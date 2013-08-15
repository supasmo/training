<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $security->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $security->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatesecurity/'.$security->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/tasksecurity'); ?>"><?php echo __('Cancel'); ?></a>
</div>