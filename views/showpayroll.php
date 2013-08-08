<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $payroll->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $payroll->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatepayroll/'.$payroll->id); ?>" title="Edit Course"><?php echo __('Edit Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/payrolltask'); ?>"><?php echo __('Cancel'); ?></a>
</div>
