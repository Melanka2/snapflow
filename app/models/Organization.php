<?php

class Organization {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Organization();
        }
        return self::$instance;
    }

    public  function getOrganizations()
    {
        $this->db->query('SELECT * FROM organization');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

}