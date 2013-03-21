<?php

class Cron {

    private $config;
    private $database;

    private $cronTaskList;

    public function __construct($config, $database) {
        $this->config = $config;
        $this->database = $database;
        $this->getCronTaskList();
    }

    private function getCronTaskList () {
        $query = "SELECT * FROM rc_crontasks ORDER BY cronId";
        $result = $this->database->query($query);
        $this->cronTaskList = $this->database->fetch_array($result);
    }
}