<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Benefits Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newbenefits" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Benefits Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="benefits-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="benefits-title" name="benefits[title]" class="textbox" value="<?php if (isset($benefits['title'])) echo $benefits['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="benefits-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('benefits[start_date]');" type="text" id="benefits-startdate" name="benefits[start_date]" class="date" value="<?php if (isset($benefits['start_date'])) echo $benefits['start_date']; ?>" /><img onclick="displayDatePicker('benefits[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="benefits-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('benefits[end_date]');" type="text" id="benefits-enddate" name="benefits[end_date]" class="date" value="<?php if (isset($benefits['end_date'])) echo $benefits['end_date']; ?>" /><img onclick="displayDatePicker('benefits[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/benefitstask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>
