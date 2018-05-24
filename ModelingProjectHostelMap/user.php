<?php
 session_start();
    class user
    {
        public function &avtoriza()
        {
     if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
     if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }


        // подключаемся к базе
        include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
        $result = mysql_query("SELECT * FROM user WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
        $myrow = mysql_fetch_array($result);
        $parol=$myrow['password'];
        return $parol;
        }
        public function &vxod($parol = '',$password = '')
        {
            if (empty($parol))
    {
        //если пользователя с введенным логином не существует
         $temp="error1.php";
    }
         else {
    //если существует, то сверяем пароли
         if ($parol==$password) {
            $_SESSION['login']=$_POST['login']; 
            $temp="floor1.php"; 
	  
                                        }
         else {
            $temp="error2.php";  //если пароли не сошлись
              }
     
    }
    return $temp;  } //закрытие функции
    } // закрытие класса

    $foo = new User();
    $funcname = "avtoriza";
    $win=&$foo->$funcname();
   // echo $win;
    $funcname1 = "vxod";
    $pere=&$foo->$funcname1($win,$_POST['password']);
    //echo $pere;
    header("Location: http://itmo/$pere");
    exit;
    ?>