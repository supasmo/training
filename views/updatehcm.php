<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showhcm = Hcm::findByIdFrom('Hcm', $hcm->getId());
?>

<h1><?php echo __('Edit HCM Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatehcmcourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit HCM Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="hcm-id"><?php echo __('Hcm ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="hcm-id" name="hcm[id]" class="textbox" value="<?php echo $hcm->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="hcm-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="hcm-title" name="hcm[title]" class="textbox" value="<?php echo $hcm->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="hcm-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('hcm[start_date]');" type="text" id="hcm-startdate" name="hcm[start_date]" class="date" value="<?php echo $hcm->getStartDate(); ?>" />
                    <img onclick="displayDatePicker('hcm[start_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="training-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input onclick="displayDatePicker('hcm[end_date]');" type="text" id="hcm-enddate" name="hcm[end_date]" class="date" value="<?php echo $hcm->getEndDate(); ?>" />
                    <img onclick="displayDatePicker('hcm[end_date]');" class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="hcm-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $hcm->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/hcmtask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>