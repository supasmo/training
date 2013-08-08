<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }


?>

<h1><?php echo __('All Benefits Fundamentals'); ?></h1>
    <table class="index" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo __('Title'); ?></td>
                <td><?php echo __('Start Date'); ?></td><!-- "Created On" -->
                <td><?php echo __('End Date'); ?></td>
                <td><?php echo __('Last updated on'); ?></td>
                <td><?php echo __('Edit'); ?></td>
                <td><?php echo __('Delete'); ?></td>
            </tr>
        </thead>

        <?php foreach($benefits as $courses) { ?>

        <tr class="<?php echo odd_even(); ?>">
            <td><?php echo $courses->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/training/showbenefits/'.$courses->id); ?>"><?php echo $courses->getTitle(); ?></a></td>
            <td><?php echo $courses->getStartDate(); ?></td>
            <td><?php echo $courses->getEndDate(); ?></td>
            <td><?php echo $courses->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/training/update/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/edit.gif" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/training/delete/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/trash.gif" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>
    
    
    
<h1><?php echo __('All Compensation Fundamentals Courses'); ?></h1>
    <table class="index" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo __('Title'); ?></td>
                <td><?php echo __('Start Date'); ?></td><!-- "Created On" -->
                <td><?php echo __('End Date'); ?></td>
                <td><?php echo __('Last updated on'); ?></td>
                <td><?php echo __('Edit'); ?></td>
                <td><?php echo __('Delete'); ?></td>
            </tr>
        </thead>

        <?php foreach($compensation as $courses) { ?>

        <tr class="<?php echo odd_even(); ?>">
            <td><?php echo $courses->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/training/showcompensation/'.$courses->id); ?>"><?php echo $courses->getTitle(); ?></a></td>
            <td><?php echo $courses->getStartDate(); ?></td>
            <td><?php echo $courses->getEndDate(); ?></td>
            <td><?php echo $courses->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/training/update/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/edit.gif" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/training/delete/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/trash.gif" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>
    
    
    
<h1><?php echo __('All HCM Fundamentals Courses'); ?></h1>
    <table class="index" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo __('Title'); ?></td>
                <td><?php echo __('Start Date'); ?></td><!-- "Created On" -->
                <td><?php echo __('End Date'); ?></td>
                <td><?php echo __('Last updated on'); ?></td>
                <td><?php echo __('Edit'); ?></td>
                <td><?php echo __('Delete'); ?></td>
            </tr>
        </thead>

        <?php foreach($hcm as $courses) { ?>

        <tr class="<?php echo odd_even(); ?>">
            <td><?php echo $courses->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/training/showhcm/'.$courses->id); ?>"><?php echo $courses->getTitle(); ?></a></td>
            <td><?php echo $courses->getStartDate(); ?></td>
            <td><?php echo $courses->getEndDate(); ?></td>
            <td><?php echo $courses->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/training/update/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/edit.gif" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/training/delete/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/trash.gif" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>
    
    
    
<h1><?php echo __('All Payroll Processing Courses'); ?></h1>
    <table class="index" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo __('Title'); ?></td>
                <td><?php echo __('Start Date'); ?></td><!-- "Created On" -->
                <td><?php echo __('End Date'); ?></td>
                <td><?php echo __('Last updated on'); ?></td>
                <td><?php echo __('Edit'); ?></td>
                <td><?php echo __('Delete'); ?></td>
            </tr>
        </thead>

        <?php foreach($payroll as $courses) { ?>

        <tr class="<?php echo odd_even(); ?>">
            <td><?php echo $courses->getId(); ?></td>
            <td><a href="<?php echo get_url('plugin/training/showpayroll/'.$courses->id); ?>"><?php echo $courses->getTitle(); ?></a></td>
            <td><?php echo $courses->getStartDate(); ?></td>
            <td><?php echo $courses->getEndDate(); ?></td>
            <td><?php echo $courses->getUpdate(); ?></td>
            <td align="right"><a href="<?php echo get_url('plugin/training/update/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/edit.gif" alt="Edit" /></a></td>
            <td><a href="<?php echo get_url('plugin/payroll/delete/'.$courses->id); ?>"><img src="<?php echo PLUGINS_URI; ?>/training/images/trash.gif" alt="Delete" /></a></td>
        </tr>
        <?php } ?>
    </table>

