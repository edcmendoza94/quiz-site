<?php
/**
 * Representation of a quiz question. Has
 * the question itself, its answers, and
 * the ID of the quiz it comes from.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class Question
{
    //Class fields
    protected $questionID;
    protected $question;
    protected $answerOne;
    protected $answerTwo;
    protected $answerThree;
    protected $answerFour;
    protected $correctAnswer;
    protected $fromQuizWithID;
    
    /**
     * Class constructor
     *
     * @param int questionID - question's ID number
     * @param String question
     * @param String answerOne
     * @param String answerTwo
     * @param String answerThree
     * @param String answerFour
     * @param String correctAnswer - any of the above
     * four answers that is the right answer to the
     * question
     * @param int fromQuizWithID - the ID of the quiz
     * this question belongs to
     */
    function __construct($questionID, $question, $answerOne,
                         $answerTwo, $answerThree, $answerFour,
                         $correctAnswer, $fromQuizWithID)
    {
        $this->questionID = $questionID;
        $this->question = $question;
        $this->answerOne = $answerOne;
        $this->answerTwo = $answerTwo;
        $this->answerThree = $answerThree;
        $this->answerFour = $answerFour;
        $this->correctAnswer = $correctAnswer;
        $this->fromQuizWithID = $fromQuizWithID;
    }
    
    //Setters and getters
    /**
     * Assign a question
     *
     * @param String question
     */
    function setQuestion($question)
    {
        $this->question = $question;
    }
    
    /**
     * Assign a question's first answer
     *
     * @param String answerOne
     */
    function setAnswerOne($answerOne)
    {
        $this->answerOne = $answerOne;
    }
    
    /**
     * Assign a question's second answer
     *
     * @param String answerTwo
     */
    function setAnswerTwo($answerTwo)
    {
        $this->answerTwo = $answerTwo;
    }
    
    /**
     * Assign a question's third answer
     *
     * @param String answerThree
     */
    function setAnswerThree($answerThree)
    {
        $this->answerThree = $answerThree;
    }
    
    /**
     * Assign a question's fourth answer
     *
     * @param String answerFour
     */
    function setAnswerFour($answerFour)
    {
        $this->answerFour = $answerFour;
    }
    
    /**
     * Assign a question's correct answer,
     * which will be the same as one of the
     * question's four answers
     *
     * @param String correctAnswer
     */
    function setCorrectAnswer($correctAnswer)
    {
        $this->correctAnswer = $correctAnswer;
    }
    
    /**
     * Assign a quiz's ID to a question
     *
     * @param int fromQuizWithID
     */
    function setFromQuizWithID($fromQuizWithID)
    {
        $this->fromQuizWithID = $fromQuizWithID;
    }
    
    /**
     * Obtain a question's ID number
     *
     * @return int
     */
    function getQuestionID()
    {
        return $this->questionID;
    }
    
    /**
     * Obtain a question
     *
     * @return String
     */
    function getQuestion()
    {
        return $this->question;
    }
    
    /**
     * Obtain a question's first answer
     *
     * @param String
     */
    function getAnswerOne()
    {
        return $this->answerOne;
    }
    
    
    /**
     * Obtain a question's second answer
     *
     * @param String
     */
    function getAnswerTwo()
    {
        return $this->answerTwo;
    }
    
    /**
     * Obtain a question's third answer
     *
     * @param String
     */
    function getAnswerThree()
    {
        return $this->answerThree;
    }
    
    /**
     * Obtain a question's fourth answer
     *
     * @param String
     */
    function getAnswerFour()
    {
        return $this->answerFour;
    }
    
    /**
     * Obtain a question's correct answer
     *
     * @param String
     */
    function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
    
    /**
     * Obtain the ID of the quiz a
     * question is from
     *
     * @param int
     */ 
    function getFromQuizWithID()
    {
        return $this->fromQuizWithID;
    }
}
?>