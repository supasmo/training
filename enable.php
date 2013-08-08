<?php

/* Security measure */
if (!defined('IN_CMS')) { exit(); }


// Connect
$PDO = Record::getConnection();
$tp = TABLE_PREFIX . 'training_';
$tables = array();

//Create benefits
$tables[] = "CREATE TABLE ".$tp."benefits (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        filter_id VARCHAR(25),
		start_date DATE,
		end_date DATE,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    )";

//Create compensation
$tables[] = "CREATE TABLE ".$tp."compensation (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        filter_id VARCHAR(25),
		start_date DATE,
		end_date DATE,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    )";

//Create payroll
$tables[] = "CREATE TABLE ".$tp."payroll (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        filter_id VARCHAR(25),
		start_date DATE,
		end_date DATE,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    )";

//Create hcm
$tables[] = "CREATE TABLE ".$tp."hcm (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        filter_id VARCHAR(25),
		start_date DATE,
		end_date DATE,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    )";

foreach ($tables as $sql) {
	$PDO->exec($sql);
}
