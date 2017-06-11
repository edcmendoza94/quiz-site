<?php
/**
 * Controller file for the page where
 * a user takes a quiz.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class TakeQuizControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function viewQuizForm()
    {
        $db = new QuizSiteDB();
        
        $questions = $db->getQuestionsFromQuizIDNum($this->_params['id']);
        
        $questionArr = array();
        
        foreach($questions as $question) {
            $thisQuestion = new Question($question['question_id'], $question['question'],
                                         $question['answer_one'], $question['answer_two'],
                                         $question['answer_three'], $question['answer_four'],
                                         $question['correct_answer'],
                                         $question['from_quiz_with_id']);
            
            $questionArr[] = $thisQuestion;
        }
        
        //var_dump($questionArr);
        
        $numOfQuestions = sizeof($questionArr);
        
        $this->_f3->set('questions', $questionArr);
        $this->_f3->set('numOfQuestions', $numOfQuestions);
        
        echo Template::instance()->render('view/include/header.html');
        echo Template::instance()->render('view/take-quiz.html');
    }
}
?>