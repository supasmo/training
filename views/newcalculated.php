<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Calculated Fields'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newcalculated" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Calculated Fields Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="calculated-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="calculated-title" name="calculated[title]" class="textbox" value="<?php if (isset($calculated['title'])) echo $calculated['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="calculated-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('calculated[start_date]');" type="text" id="calculated-startdate" name="calculated[start_date]" class="date" value="<?php if (isset($calculated['start_date'])) echo $calculated['start_date']; ?>" /><img onclick="displayDatePicker('calculated[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="calculated-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('calculated[end_date]');" type="text" id="calculated-enddate" name="calculated[end_date]" class="date" value="<?php if (isset($calculated['end_date'])) echo $calculated['end_date']; ?>" /><img onclick="displayDatePicker('calculated[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/taskcalculated'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>