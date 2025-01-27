<?php

namespace App\Models;

use App\Config\DB;
use ErrorException;
use PDO;

class Thread
{
    public function setThread($id, $title, $content, $category)
    {
        try {

            $replies = 0;

            $query = "INSERT INTO posts (userId, title, content, category, replies) VALUES (:userId, :title, :content, :category, :replies);";
            $stmt = DB::connect()->prepare($query);

            $stmt->bindParam(':userId', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':replies', $replies);

            $stmt->execute();

        } catch (ErrorException $e) {

            die('Error: ' . $e->getMessage());

        }
    }

    public function getAllThreads()
    {
        $query = "SELECT * FROM posts";
        $stmt = DB::connect()->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $_SESSION["threads"] = $result;
    }

    public static function getThreadById($param)
    {
        $query = "SELECT * FROM posts WHERE post_id = :post_id";
        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam('post_id',$param);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function setReply($postId, $userId, $content)
    {
        $query = "INSERT INTO replies (user_id, post_id, content) VALUES (:user_id, :post_id, :content)";
        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam('post_id',$postId);
        $stmt->bindParam('user_id',$userId);
        $stmt->bindParam('content',$content);

        $stmt->execute();

        $this->addReplyCount($postId);

    }

    public function addReplyCount($postId)
    {
        $query = "UPDATE posts SET replies = replies + 1 WHERE post_id = :post_id";
        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam('post_id', $postId);

        $stmt->execute();

    }
}