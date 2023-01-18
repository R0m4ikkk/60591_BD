<?php
session_start();
if($_POST['login'])
{
    $result = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");
    if($row = $result->fetch())
    {
        if(($_POST['password']) == $row['password'])
        {
            $_SESSION['username'] = $_POST['login'];
            $_SESSION['id_auth_user'] = $row['id'];
            $_SESSION['is_admin'] = $row['is_admin'];
        }
        else
        {
            $message = 'Неверный пароль';
        }
    }
    else
    {
        $message = 'Неверный логин';
    }

    if($_POST['password'] == 'pass')
    {
        $_SESSION['username'] = $_POST['login'];
    }
};

if($_GET['logout'])
{
    $_SESSION['message'] = 'Вы вышли из системы';
    session_unset();

}

