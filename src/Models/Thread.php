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

            $query = "INSERT INTO posts (user_id, title, content, category, replies) VALUES (:user_id, :title, :content, :category, :replies);";
            $stmt = DB::connect()->prepare($query);

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

    public function getAllThreads()
    {
        $query = "SELECT * FROM posts ORDER BY post_id DESC;";
        $stmt = DB::connect()->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $_SESSION["threads"] = $result;
    }

    public static function getThreadById($postId)
    {
        $query = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id WHERE post_id = :post_id";
        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam('post_id',$postId);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getReplies($postId)
    {

        $query = "SELECT * 
                FROM replies
                INNER JOIN posts ON replies.post_id = posts.post_id
                INNER JOIN users ON replies.user_id = users.id
                WHERE replies.post_id = :post_id";

        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam('post_id',$postId);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function setReply($postId, $userId, $reply)
    {

        $query = "INSERT INTO replies (user_id, post_id, reply) VALUES (:user_id, :post_id, :reply)";
        $stmt = DB::connect()->prepare($query);

        $stmt->bindParam(':post_id', $postId);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':reply', $reply);

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