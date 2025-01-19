<?php

namespace App\Models;

use App\Config\Database;
use ErrorException;
use PDO;

class Thread extends Database 
{

    public function setThread($id, $title, $content, $category)
    {
        try {

            $replies = 0;

            $query = "INSERT INTO posts (user_id, title, content, category, replies) VALUES (:user_id, :title, :content, :category, :replies);";
            $stmt = $this->connect()->prepare($query);

            $stmt->bindParam(':user_id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':replies', $replies);

            $stmt->execute();

        } catch (ErrorException $e) {

            die('Error: ' . $e->getMessage());

        }
    }

    public function getThreads()
    {
        $query = "SELECT * FROM posts";
        $stmt = $this->connect()->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $_SESSION["threads"] = $result;
    
    }
}