<?php
/**
 * Representation of a quiz as it appears
 * on the quiz site's home page. Merely
 * possesses a name and a number of questions.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class Quiz
{
    //Class fields
    protected $quizID;
    protected $quizName;
    protected $numOfQuestions;
    
    /**
     * Class constructor
     *
     * @param int quizID - Quiz's ID number
     * @param String quizName - Quiz's name
     * @param int numOfQuestions - How many
     * questions a quiz has
     */
    function __construct($quizID, $quizName,
                         $numOfQuestions)
    {
        $this->quizID = $quizID;
        $this->quizName = $quizName;
        $this->numOfQuestions = $numOfQuestions;
    }
    
    //Setters and getters
    /**
     * Assign a name to a quiz
     *
     * @param String quizName
     */
    function setQuizName($quizName)
    {
        $this->quizName = $quizName;
    }
    
    /**
     * Assign a number of questions to
     * a quiz
     *
     * @param int numOfQuestions
     */
    function setNumOfQuestions($numOfQuestions)
    {
        $this->numOfQuestions = $numOfQuestions;
    }
    
    /**
     * Retrieve a quiz's ID number
     *
     * @return int
     */
    function getQuizID()
    {
        return $this->quizID;
    }
    
    /**
     * Retrieve a quiz's name
     *
     * @return String
     */
    function getQuizName()
    {
        return $this->quizName;
    }
    
    /**
     * Retrieve the number of questions
     * a quiz has
     *
     * @return int
     */
    function getNumOfQuestions()
    {
        return $this->numOfQuestions;
    }
}
?>