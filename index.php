<?php

if (!defined('IN_CMS')) { exit(); }



Plugin::setInfos(array(
    'id'          => 'training',
    'title'       => __('Training Courses'),
    'description' => __('Add OSV Training Courses'),
    'version'     => '0.1.0',
    'license'     => 'GPL',
    'author'      => 'OneSource Virtual',
    'website'     => 'http://www.onesourcevirtual.com',
    'update_url'  => '',
    'require_wolf_version' => '0.7.3'
));

// Show tab
Plugin::addController('training', __('Training Courses'), 'admin_view', true);

// Date Format


// Load courses models
AutoLoader::addFile('Benefits', CORE_ROOT.'/plugins/training/models/Benefits.php');
AutoLoader::addFile('Compensation', CORE_ROOT.'/plugins/training/models/Compensation.php');
AutoLoader::addFile('Payroll', CORE_ROOT.'/plugins/training/models/Payroll.php');
AutoLoader::addFile('Hcm', CORE_ROOT.'/plugins/training/models/Hcm.php');
// Load webex courses models
AutoLoader::addFile('Process', CORE_ROOT.'/plugins/training/models/Process.php');
AutoLoader::addFile('Calculated', CORE_ROOT.'/plugins/training/models/Calculated.php');
AutoLoader::addFile('Security', CORE_ROOT.'/plugins/training/models/Security.php');
AutoLoader::addFile('Report', CORE_ROOT.'/plugins/training/models/Report.php');

/* AutoLoader::addFolder(PLUGINS_ROOT . '/training/models'); */



// Show all benefits in frontend
function showallbenefits(){
    $benefits = Benefits::findAllFrom('Benefits', 'id=id ORDER BY start_date ASC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($benefits as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all compensation courses in frontend
function showallcompensation(){
    $compensation = Compensation::findAllFrom('Compensation', 'id=id ORDER BY title DESC');
    
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($compensation as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all payrolls in frontend
function showallpayroll(){
    $payroll = Payroll::findAllFrom('Payroll', 'id=id ORDER BY title DESC');

	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($payroll as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all HCM fundamentals courses in frontend
function showallhcm(){
    $hcm = Hcm::findAllFrom('Hcm', 'id=id ORDER BY title DESC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($hcm as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all business process fundamentals courses in frontend
function showallprocess(){
    $process = Process::findAllFrom('Process', 'id=id ORDER BY title DESC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($process as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all Calculated Fields courses in frontend
function showallcalculated(){
    $calculated = Calculated::findAllFrom('Calculated', 'id=id ORDER BY title DESC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($calculated as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all Configurable Security Fundamentals courses in frontend
function showallsecurity(){
    $security = Security::findAllFrom('Security', 'id=id ORDER BY title DESC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($security as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}


// Show all Report Writer courses in frontend
function showallreport(){
    $report = Report::findAllFrom('Report', 'id=id ORDER BY title DESC');
	
	$formatEN = '%A, %d %B %Y';
    echo '<div class="training-list">';
	echo '<ul>';
        foreach ($report as $n) {
			echo '<li><h3>'.strftime($formatEN,strtotime($n->getStartDate())).'&nbsp;-&nbsp;'; echo strftime($formatEN,strtotime($n->getEndDate())).'</h3></li>';
        }
	echo '</ul>';
    echo '</div>';
}
