<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showpayroll = Payroll::findByIdFrom('Payroll', $payroll->getId());
?>

<h1><?php echo __('Edit Payroll Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatepayrollcourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Payroll Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="payroll-id"><?php echo __('Course ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="payroll-id" name="payroll[id]" class="textbox" value="<?php echo $payroll->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="payroll-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="payroll-title" name="payroll[title]" class="textbox" value="<?php echo $payroll->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="payroll-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker1" name="payroll[start_date]" class="date" value="<?php echo $payroll->getStartDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="payroll-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker2" name="payroll[end_date]" class="date" value="<?php echo $payroll->getEndDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="payroll-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $payroll->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/payrolltask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>