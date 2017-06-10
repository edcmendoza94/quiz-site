<?php
/**
 * Routing file for the quiz site.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */

 require_once('vendor/autoload.php');
 
 $f3 = Base::instance();
 
 $f3->route('GET /', function($f3, $params) {
    $control = new QuizHomeControl($f3, $params);
    $control->viewHome();
 });
 
 $f3->run();
?>