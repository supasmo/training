<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Configurable Security Fundamentals'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newsecurity" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Configurable Security Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="security-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="security-title" name="security[title]" class="textbox" value="<?php if (isset($security['title'])) echo $security['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('security[start_date]');" type="text" id="datepicker1" name="security[start_date]" class="date" value="<?php if (isset($security['start_date'])) echo $security['start_date']; ?>" /><img onclick="displayDatePicker('security[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="security-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('security[end_date]');" type="text" id="security-enddate" name="security[end_date]" class="date" value="<?php if (isset($security['end_date'])) echo $security['end_date']; ?>" /><img onclick="displayDatePicker('security[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/tasksecurity'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>