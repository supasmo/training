<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $process->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $process->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updateprocess/'.$process->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/taskprocess'); ?>"><?php echo __('Cancel'); ?></a>
</div>
