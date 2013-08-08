<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

?>
<h1><?php echo __('Create New Payroll Processing Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/newpayroll" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Add New Payroll Processing Course'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="payroll-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="payroll-title" name="payroll[title]" class="textbox" value="<?php if (isset($payroll['title'])) echo $payroll['title']; ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="payroll-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker1" name="payroll[start_date]" class="date" value="<?php if (isset($payroll['start_date'])) echo $payroll['start_date']; ?>" /><img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="payroll-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker2" name="payroll[end_date]" class="date" value="<?php if (isset($payroll['end_date'])) echo $payroll['end_date']; ?>" /><img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/payrolltask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>

