<?php
/**
 * Quiz site class file that talks with
 * the database tables "Quizzes",
 * "Questions", and "QuizUsers"
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class QuizSiteDB
{
    private $_pdo;
    
    function __construct()
    {
        require_once("/home/emendoza5/config.php");
        
        try {
            //Open a connection to the database
            $this->_pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
            
            //Keep the connection open
            $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
            //Throw an exception whenever a database error occurs
            $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
              die( "Error!: " . $e->getMessage());
        }
    }
    
    function showAllQuizzes()
    {
        $select = "SELECT * FROM Quizzes";
        
        $statement = $this->_pdo->prepare($select);
        
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
    
    function getQuestionsFromQuizIDNum($quizID)
    {
        $select = "SELECT * FROM Questions WHERE from_quiz_with_id = :quiz_id";
        
        $statement = $this->_pdo->prepare($select);
        
        $statement->bindParam(':quiz_id', $quizID, PDO::PARAM_INT);
        
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
}
?>