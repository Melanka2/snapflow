<?php

class User
{

    private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new User();
        }
        return self::$instance;
    }

    public function signUp($data)
    {
        $this->db->query('INSERT INTO user (email, password) VALUES(:email, :password)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            if ($data['role'] == 'ADMIN') {
                $this->db->query('INSERT INTO admin (first_name, last_name,user_id) VALUES(:firstName, :lastName, (SELECT id FROM user WHERE email = :email))');
                $this->db->bind(':firstName', $data['firstName']);
                $this->db->bind(':lastName', $data['lastName']);
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
            } elseif ($data['role'] == 'MANAGER') {
                $this->db->query('INSERT INTO manager (first_name, last_name,user_id) VALUES(:firstName, :lastName, (SELECT id FROM user WHERE email = :email))');
                $this->db->bind(':firstName', $data['firstName']);
                $this->db->bind(':lastName', $data['lastName']);
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
            } elseif ($data['role'] == 'EDITOR') {
                $this->db->query('INSERT INTO editor (first_name, last_name,user_id) VALUES(:firstName, :lastName, (SELECT id FROM user WHERE email = :email))');
                $this->db->bind(':firstName', $data['firstName']);
                $this->db->bind(':lastName', $data['lastName']);
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
            } elseif ($data['role'] == 'PHOTOGRAPHER') {
                $this->db->query('INSERT INTO photographer (first_name, last_name,user_id) VALUES(:firstName, :lastName, (SELECT id FROM user WHERE email = :email))');
                $this->db->bind(':firstName', $data['firstName']);
                $this->db->bind(':lastName', $data['lastName']);
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
            } elseif ($data['role'] == 'CUSTOMER') {
                $this->db->query('INSERT INTO customer (first_name, last_name,user_id) VALUES(:firstName, :lastName, (SELECT id FROM user WHERE email = :email))');
                $this->db->bind(':firstName', $data['firstName']);
                $this->db->bind(':lastName', $data['lastName']);
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
            }
            return true;
        } else {
            return false;
        }
    }

    public function signIn($data)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email AND password = :password');
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
