<?php

include_once('../config/config.cron.php');
include_once('../classes/Database.php');
include_once('../classes/Cron.php');

$database = new Database($cronConfig);
$cron = new Cron($cronConfig, $database);

print "RaidChecker Cron System<br />";
print "Cron Version:" . $cronConfig->cronVersion . "<br />";
print "<br />";
print "Tasks todo:";

