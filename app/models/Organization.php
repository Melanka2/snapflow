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

    public  function getNotAcceptedOrganizations()
    {
        $this->db->query('SELECT * FROM organization WHERE accepted = 0');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

    public function acceptOrganization($data)
    {
        var_dump($data['id']);
        $this->db->query('UPDATE organization SET accepted = 1 WHERE organi_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


}