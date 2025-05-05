<?php  
    session_start();

    // -- Проверим, передано ли имя сохранения, или очистим параметр сессии
    if (empty($_POST['userName'])) {
        unset($_SESSION['userName']);
    }
    // -- Иначе, сохраним в параметрах сессии переданное имя
    else {
        $_SESSION['userName'] = $_POST['userName'];
    }

    // -- Вернемся на стартовую страницу
    header("Location: " . $_SERVER["HTTP_REFERER"]);