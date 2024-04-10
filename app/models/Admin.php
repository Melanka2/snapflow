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

    public function signIn($data)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email AND password = :password');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

}