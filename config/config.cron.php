<?php

$cronConfig = new stdClass();

//Cron version
$cronConfig->cronVersion = '1.0.0';

//Cron enabled
$cronConfig->enabled = 1;

//Battle.net API Url
$cronConfig->battleNetApiUrl = 'http://eu.battle.net/api/wow/';

//Database Settings

$cronConfig->host = 'localhost';
$cronConfig->username = 'root';
$cronConfig->password = '';
$cronConfig->dbname = 'raidchecker';