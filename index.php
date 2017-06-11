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
 
 $f3->route('GET /about', function($f3, $params) {
    $control = new QuizAboutControl($f3, $params);
    $control->viewAbout();
 });
 
 $f3->route('GET /login', function($f3, $params){
    $control = new QuizLoginControl($f3, $params);
    $control->viewLogin();
 });
 
 $f3->run();
?>