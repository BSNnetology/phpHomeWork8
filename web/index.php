<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    mb_internal_encoding('UTF-8');
    
    session_start();

    // -- Если имя пользователя не сохранено, откроем страницу авторизации
    if (!isset($_SESSION['userName'])) {
        include './autorisation.html';
    } 
    // -- Иначе, перейдем ина основную страницу сайта
    else {
        include './mysite.html';
    }


