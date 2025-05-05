<?php 
    session_start();

    // -- Очистим параметр сессии
    unset($_SESSION['userName']);

    // -- Вернемся на стартовую страницу
    header("Location: " . $_SERVER["HTTP_REFERER"]);