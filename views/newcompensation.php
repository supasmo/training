<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Compensation Fundamentals Courses'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newcompensation" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Compensation Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="compensation-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="compensation-title" name="compensation[title]" class="textbox" value="<?php if (isset($compensation['title'])) echo $compensation['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="compensation-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('compensation[start_date]');" type="text" id="compensation-startdate" name="compensation[start_date]" class="date" value="<?php if (isset($compensation['start_date'])) echo $compensation['start_date']; ?>" /><img onclick="displayDatePicker('compensation[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="compensation-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('compensation[end_date]');" type="text" id="compensation-enddate" name="compensation[end_date]" class="date" value="<?php if (isset($compensation['end_date'])) echo $compensation['end_date']; ?>" /><img onclick="displayDatePicker('compensation[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/compensationtask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>

