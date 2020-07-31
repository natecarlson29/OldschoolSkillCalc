<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * @author: Tarnue Korvah
 * CommentDB Class
 * 
 */
class CommentDB {
    /* @var $comment Comment */

    public static function getComments($recipient)
    {
        $db=database::getDB();
        $query='SELECT * FROM comment WHERE skill = :recipient ORDER BY comTime desc LIMIT 5';
        $statement = $db->prepare($query);
        $statement->bindValue(':recipient', $recipient);
        $statement->execute();
        $result=$statement->fetchall();
        $statement->closeCursor();  
        
          $allComments = array();
        foreach ($result as $c) {
            $comment = new Comment($c['skill'], $c['comText'], $c['commenter'], $c['comTime'], $c['commentID']);
            $allComments[] = $comment;
        }
        return $allComments;
    }
    
    public static function select_all() {
        $db = Database::getDB();

        $query = 'SELECT * FROM comment;';
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();


        $comments = array();
        foreach ($result as $c) {
            $comment = new Comment($c['skill'], $c['comText'], $c['commenter'], $c['comTime'], $c['cmID']);
            $comments[] = $comment;
        }
        return $comments;
    }

    public static function addComment($comment) {
        $db = Database::getDB();

        $recipient = $comment->getRecipient();
        $comText = $comment->getComText();
        $commenter = $comment->getCommenter();
        $comTime = $comment->getComTime();

        $query = 'INSERT INTO comment
                 (skill, comText, commenter, comTime)
              VALUES
                 (:recipient, :comText, :commenter, :comTime)';
        $statement = $db->prepare($query);
        $statement->bindValue(':recipient', $recipient);
        $statement->bindValue(':comText', $comText);
        $statement->bindValue(':commenter', $commenter);
        $statement->bindValue(':comTime', $comTime);
        $statement->execute();
        $statement->closeCursor();
    }

}

