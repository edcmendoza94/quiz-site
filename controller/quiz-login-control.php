<?php
/**
 * Quiz site login/signup controller.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class QuizLoginControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function ViewLogin()
    {
        echo Template::instance()->render('view/include/header.html');
        echo Template::instance()->render('view/quiz-login.html');
    }
}
?>