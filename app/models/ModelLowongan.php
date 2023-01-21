<?php

class ModelLowongan
{
    private $table = 'job_vacancy';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id ORDER BY id DESC ");
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id WHERE {$this->table}.id = :id");

        $this->db->bind('id', $id);

        return $this->db->resultSet();
    }

    public function getNew()
    {
        $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id ORDER BY id DESC LIMIT 6");
        return $this->db->resultSet();
    }

    public function search($data)
    {
        if (isset($data['keyword']) && isset($data['category_id'])) {
            $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id WHERE {$this->table}.category_id = :category_id AND {$this->table}.name LIKE '%" . $data['keyword'] . "%'");

            $this->db->bind('category_id', $data['category_id']);

            return $this->db->resultSet();
        } elseif (isset($data['keyword'])) {
            $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id WHERE {$this->table}.name LIKE '%" . $data['keyword'] . "%'");

            return $this->db->resultSet();
        } elseif (isset($data['category_id'])) {
            $this->db->query("SELECT job_vacancy.*, category.name AS 'c_name' FROM {$this->table} JOIN category ON job_vacancy.category_id = category.id WHERE {$this->table}.category_id = :category_id");

            $this->db->bind('category_id', $data['category_id']);

            return $this->db->resultSet();
        }
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO {$this->table} (name, category_id, type, company, description, form_link) VALUES (:name, :category_id, :type, :company, :description, :form_link)");

        $this->db->bind('name', $data['name']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('type', $data['type']);
        $this->db->bind('company', $data['company']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('form_link', $data['form_link']);

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
        $this->db->query("UPDATE {$this->table} SET name = :name, category_id = :category_id, type = :type, company = :company, description = :description, form_link = :form_link WHERE {$this->table}.id = :id");

        $this->db->bind('name', $data['name']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('type', $data['type']);
        $this->db->bind('company', $data['company']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('form_link', $data['form_link']);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
