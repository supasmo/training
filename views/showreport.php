<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $report->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $report->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatereport/'.$report->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/taskreporty'); ?>"><?php echo __('Cancel'); ?></a>
</div>