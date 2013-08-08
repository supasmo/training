<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New HCM Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newhcm" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New HCM Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="hcm-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="hcm-title" name="hcm[title]" class="textbox" value="<?php if (isset($hcm['title'])) echo $hcm['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="hcm-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker1" name="hcm[start_date]" class="date" value="<?php if (isset($hcm['start_date'])) echo $hcm['start_date']; ?>" /><img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="hcm-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker2" name="hcm[end_date]" class="date" value="<?php if (isset($hcm['end_date'])) echo $hcm['end_date']; ?>" /><img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/hcmtask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>

