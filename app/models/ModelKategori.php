<?php

class ModelKategori
{
    private $table = 'category';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM {$this->table} ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE {$this->table}.id = :id");

        $this->db->bind('id', $id);

        return $this->db->resultSet();
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO {$this->table} (name) VALUES (:name)");

        $this->db->bind('name', $data['name']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE {$this->table}.id = :id");

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($id, $data)
    {
        $this->db->query("UPDATE {$this->table} SET name = :name WHERE {$this->table}.id = :id");

        $this->db->bind('name', $data['name']);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
