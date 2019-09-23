<?php


spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$obj = new Product();
$obj2 = new User();
