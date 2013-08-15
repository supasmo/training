<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showbenefits = Benefits::findByIdFrom('Benefits', $benefits->getId());
?>

<h1><?php echo __('Edit Business Process Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updateprocesscourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Business Process Fundamentals'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="process-id"><?php echo __('Course ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="process-id" name="process[id]" class="textbox" value="<?php echo $process->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="process-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="process-title" name="process[title]" class="textbox" value="<?php echo $process->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="process-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('process[start_date]');" type="text" id="process-startdate" name="process[start_date]" class="date" value="<?php echo $process->getStartDate(); ?>" />
                    <img onclick="displayDatePicker('process[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="process-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('process[end_date]');" type="text" id="process-enddate" name="process[end_date]" class="date" value="<?php echo $process->getEndDate(); ?>" />
                    <img onclick="displayDatePicker('process[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="process-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $process->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/taskprocess'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>