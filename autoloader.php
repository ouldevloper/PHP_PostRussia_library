<?php



spl_autoload_register(function($class){
    echo $class;
    die;
});