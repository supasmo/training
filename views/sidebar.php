<?php

/**
* Updated
*/

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

?>

<div class="training-plugin">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th><?php echo __('Listed Training Courses');?></th>
    <th width="41"><?php echo __('Add');?></th>
    <th width="41"><?php echo __('View');?></th>
  </tr>
  <tr>
    <td><p><?php echo __('Benefits Fundamentals');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewbenefits');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/benefitstask');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Business Process Fundamentals');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewprocess');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/taskprocess');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Calculated Fields');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewcalculated');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/taskcalculated');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Compensation Fundamentals');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewcompensation');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/compensationtask');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Configurable Security Fundamentals');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewsecurity');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/tasksecurity');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('HCM Fundamentals');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewhcm');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/hcmtask');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Payroll Processing');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewpayroll');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/payrolltask');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
  <tr>
    <td><p><?php echo __('Report Writer');?></p></td>
    <td><a href="<?php echo get_url('plugin/training/createnewreport');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/newnote.png" align="middle" alt="" /></a></td>
    <td><a href="<?php echo get_url('plugin/training/taskreport');?>">
    <img src="<?php echo PLUGINS_URI; ?>training/images/view.png" align="middle" alt="" /></a></td>
  </tr>
</table>

<div class="box">
<h2><?php echo __('Sidebar');?></h2>
    <p>Place the script below where you want the list of Training Courses to show up.</p>
        <pre><code>
        &lt;?php showallbenefits(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallprocess(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallcalculated(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallcompensation(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallsecurity(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallhcm(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallpayroll(); ?&gt;
        </code></pre>
        
        <pre><code>
        &lt;?php showallreport(); ?&gt;
        </code></pre>
    </div><!-- end:Box -->

</div><!-- end:Training Plugin -->   