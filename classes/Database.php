<?php

class Database {

    private $config;
    private $database;

    public function __construct($config) {
        $this->config = $config;

        try {
            if($this->database = mysql_connect($this->config->host, $this->config->username, $this->config->password)) {
                mysql_select_db($this->config->dbname) or die(mysql_error());
            }
        } catch (Exception $e) {
            throw new Exception('Database error: ' . mysql_error());
        }
    }

    public function query ($query) {
        try {
            $tmp = mysql_query($query);
            return $tmp;
        } catch (Exception $e) {
            throw new Exception(mysql_error());
        }
    }

    public function fetch_object ($result) {
        try {
            $tmp = mysql_fetch_object($result);
            return $tmp;
        } catch (Exception $e) {
            throw new Exception(mysql_error());
        }
    }

    public function fetch_array ($result) {
        try {
            $tmp = mysql_fetch_array($result);
            return $tmp;
        } catch (Exception $e) {
            throw new Exception(mysql_error());
        }
    }

    public function num_rows ($result) {
        try {
            $tmp = mysql_num_rows($result);
            return $tmp;

        } catch (Exception $e) {
            throw new Exception(mysql_error());
        }
    }
}