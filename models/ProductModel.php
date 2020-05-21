<?php
    namespace App\Models;

    use App\Core\Database;

    class ProductModel {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllProducts(){
            $this->db->query("SELECT * FROM products");
            $rows = $this->db->resultSet();
            return $rows;
        }

    }