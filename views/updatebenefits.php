<?php

/**
* Updated
*/

if (!defined('IN_CMS')) { exit(); }

//$showbenefits = Benefits::findByIdFrom('Benefits', $benefits->getId());
?>

<h1><?php echo __('Edit Benefits Fundamentals Course'); ?></h1>

<form action="<?php echo BASE_URL; ?>plugin/training/updatebenefitscourse" method="post">
    <fieldset style="padding:0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Edit Benefits Fundamentals'); ?></legend>
            <table class="fieldset" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="label"><label for="benefits-id"><?php echo __('Benefits ID'); ?></label></td>
                    <td class="field"><input type="text" readonly id="benefits-id" name="benefits[id]" class="textbox" value="<?php echo $benefits->getId(); ?>" /></td>
                </tr>
                <tr>
                    <td class="label"><label for="benefits-title"><?php echo __('Title'); ?></label></td>
                    <td class="field"><input type="text" id="benefits-title" name="benefits[title]" class="textbox" value="<?php echo $benefits->getTitle(); ?>" /></td>
                </tr>
                <tr>
                	<td class="label"><label for="benefits-startdate"><?php echo __('Start Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker1" name="benefits[start_date]" class="date" value="<?php echo $benefits->getStartDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="benefits-enddate"><?php echo __('End Date'); ?></label></td>
                    <td class="field"><input type="text" id="datepicker2" name="benefits[end_date]" class="date" value="<?php echo $benefits->getEndDate(); ?>" />
                    <img class="date-icon" src="<?php echo PLUGINS_URI; ?>/training/images/calendar.gif" alt="Calendar Date"/></td>
                </tr>
                <tr>
                	<td class="label"><label for="benefits-created"><?php echo __('Date Created'); ?></label></td>
                    <td class="field"><?php echo $benefits->getDate(); ?></td>
                </tr>
        </table>
    </fieldset>
    <p class="buttons" align="right">
        <input class="button" type="submit" name="save" value="<?php echo __('Save'); ?>" /> or <a href="<?php echo get_url('plugin/training/benefitstask'); ?>"><?php echo __('Cancel'); ?></a>
    </p>
</form>