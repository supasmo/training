<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo $benefits->getTitle(); ?></h1>

<div id="showMeAll"><?php echo $benefits->showContent(); ?></div>

<div class="border">
    <a href="<?php echo get_url('plugin/training/updatebenefits/'.$benefits->id); ?>" title="Edit Course"><?php echo __('Edit Benefits Fundamentals Course'); ?></a> 
    or <a href="<?php echo get_url('plugin/training/benefitstask'); ?>"><?php echo __('Cancel'); ?></a>
</div>
