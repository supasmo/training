<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Report Writer'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newreport" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Report Writer Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="report-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="report-title" name="report[title]" class="textbox" value="<?php if (isset($report['title'])) echo $report['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="report-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('report[start_date]');" type="text" id="report-startdate" name="report[start_date]" class="date" value="<?php if (isset($report['start_date'])) echo $report['start_date']; ?>" /><img onclick="displayDatePicker('report[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('report[end_date]');" type="text" id="report-enddate" name="report[end_date]" class="date" value="<?php if (isset($report['end_date'])) echo $report['end_date']; ?>" /><img onclick="displayDatePicker('report[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/taskreport'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>