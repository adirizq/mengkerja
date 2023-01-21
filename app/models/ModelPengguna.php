<?php

class ModelPengguna
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM {$this->table} ORDER BY id ASC");
        return $this->db->resultSet();
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)");

        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function auth($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email AND password = :password");

        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));

        return $this->db->resultSet();
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE {$this->table}.id = :id");

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function promote($id)
    {
        $this->db->query("UPDATE {$this->table} SET is_admin = 1 WHERE {$this->table}.id = :id");

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
