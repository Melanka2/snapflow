<?php

class Admin implements User{

    private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Admin();
        }
        return self::$instance;
    }

    public function signUp($data)
    {
        $this->db->query('INSERT INTO users (email, password) VALUES(:email, :password)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}