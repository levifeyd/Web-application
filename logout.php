<?php
    session_start();
    unset($_SESSION['login']); // удаялем сессию
    header('Location:/');
