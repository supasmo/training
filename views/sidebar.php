<?php

/**
* Updated
*/

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

?>

<h2><?php echo __('Benefits Fundamentals');?></h2>
<p class="button"><a href="<?php echo get_url('plugin/training/createnewbenefits');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /><?php echo __('Add Benefits Fundamentals');?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/training/benefitstask');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/docs.png" align="middle" alt="" /><?php echo __('View Benefits Fundamentals');?></a></p>

<h2><?php echo __('Compensation Fundamentals');?></h2>
<p class="button"><a href="<?php echo get_url('plugin/training/createnewcompensation');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /><?php echo __('Add Compensation Fundamentals');?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/training/compensationtask');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/docs.png" align="middle" alt="" /><?php echo __('View Compensation Fundamentals');?></a></p>

<h2><?php echo __('Payroll Processing');?></h2>
<p class="button"><a href="<?php echo get_url('plugin/training/createnewpayroll');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /><?php echo __('Add Payroll Processing Courses');?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/training/payrolltask');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/docs.png" align="middle" alt="" /><?php echo __('View Payroll Processing');?></a></p>

<h2><?php echo __('HCM Fundamentals');?></h2>
<p class="button"><a href="<?php echo get_url('plugin/training/createnewhcm');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /><?php echo __('Add HCM Fundamentals Course');?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/training/hcmtask');?>"><img src="<?php echo PLUGINS_URI; ?>training/images/docs.png" align="middle" alt="" /><?php echo __('View HCM Fundamentals');?></a></p>


<div class="box">
<h2><?php echo __('Sidebar');?></h2>
<p>Place the script below where you want the list of Training Courses to show up.</p>
    <pre><code>
    &lt;?php showallbenefits(); ?&gt;
    </code></pre>
    
    <pre><code>
    &lt;?php showallcompensation(); ?&gt;
    </code></pre>
    
    <pre><code>
    &lt;?php showallhcm(); ?&gt;
    </code></pre>
    
    <pre><code>
    &lt;?php showallpayroll(); ?&gt;
    </code></pre>
</div>
