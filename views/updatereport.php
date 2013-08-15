<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showbenefits = Benefits::findByIdFrom('Benefits', $benefits->getId());
?>

<h1><?php echo __('Edit Report Writer Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatereportcourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Report Writer'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="report-id"><?php echo __('Course ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="report-id" name="report[id]" class="textbox" value="<?php echo $report->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="report-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="report-title" name="report[title]" class="textbox" value="<?php echo $report->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="report-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('report[start_date]');" type="text" id="report-startdate" name="report[start_date]" class="date" value="<?php echo $report->getStartDate(); ?>" />
                    <img onclick="displayDatePicker('report[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="report-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('report[end_date]');" type="text" id="report-enddate" name="report[end_date]" class="date" value="<?php echo $report->getEndDate(); ?>" />
                    <img onclick="displayDatePicker('report[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="report-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $report->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/taskreport'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>