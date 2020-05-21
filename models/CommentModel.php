<?php
    namespace App\Models;

    use App\Core\Database;

    class CommentModel {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllComments(){
            $this->db->query("SELECT * FROM comments WHERE approved = 1 ORDER BY id DESC");
            $rows = $this->db->resultSet();
            return $rows;
        }

        public function addComment($data){
            $this->db->query("INSERT INTO comments (name, email, message) VALUES (:name, :email, :message)");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':message', $data['message']);
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getSingleComment($id){
            $this->db->query("SELECT * FROM comments WHERE comment_id = " . $id);
            $rows = $this->db->single();
            return $rows;

        }

        public function unapprovedComments(){
            $this->db->query("SELECT * FROM comments WHERE approved = 0 ORDER BY id DESC");
            $rows = $this->db->resultSet();
            return $rows;
        }

        public function approveComment($id){
            $this->db->query("UPDATE comments SET approved = 1 WHERE id = :id");
            $this->db->bind(':id', $id);
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function deleteComment($id){
            $this->db->query("DELETE FROM comments WHERE id = :id");
            $this->db->bind(':id', $id);
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

    }