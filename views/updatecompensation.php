<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showcompensation = Compensation::findByIdFrom('Compensation', $compensation->getId());
?>

<h1><?php echo __('Edit Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatecompensationcourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Compensation Fundamentals Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="compensation-id"><?php echo __('Compensation ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="compensation-id" name="compensation[id]" class="textbox" value="<?php echo $compensation->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="compensation-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="compensation-title" name="compensation[title]" class="textbox" value="<?php echo $compensation->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="compensation-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker1" name="compensation[start_date]" class="date" value="<?php echo $compensation->getStartDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="compensation-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker2" name="compensation[end_date]" class="date" value="<?php echo $compensation->getEndDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="compensation-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $compensation->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/compensationtask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>