<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showbenefits = Benefits::findByIdFrom('Benefits', $benefits->getId());
?>

<h1><?php echo __('Edit Configurable Security Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatesecuritycourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Configurable Security Fundamentals'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="security-id"><?php echo __('Course ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="security-id" name="security[id]" class="textbox" value="<?php echo $security->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="security-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="security-title" name="security[title]" class="textbox" value="<?php echo $security->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('security[start_date]');" type="text" id="security-startdate" name="security[start_date]" class="date" value="<?php echo $security->getStartDate(); ?>" />
                    <img onclick="displayDatePicker('security[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('security[end_date]');" type="text" id="security-enddate" name="security[end_date]" class="date" value="<?php echo $security->getEndDate(); ?>" />
                    <img onclick="displayDatePicker('security[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $security->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/tasksecurity'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>