<?php
/**
 * Quiz site home page controller file.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class QuizHomeControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function viewHome()
    {
        $db = new QuizSiteDB();
        
        $quizzes = $db->showAllQuizzes();
        $quizArr = array();
        
        foreach($quizzes as $quiz){
            $thisQuiz = new Quiz($quiz['quiz_id'], $quiz['quiz_name'],
                                 $quiz['num_of_questions']);
            $quizArr[] = $thisQuiz;
        }
        
        //var_dump($quizArr);
        
        $numOfQuizzes = sizeof($quizArr);
        
        $this->_f3->set('quizzes', $quizArr);
        $this->_f3->set('numOfQuizzes', $numOfQuizzes);
        
        echo Template::instance()->render('view/include/header.html');
        echo Template::instance()->render('view/quiz-home.html');
    }
}
?>