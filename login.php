<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
		  
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Starostaaaaa!"); //останавливаем выполнение сценариев
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


// дописываем новое********************************************

// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


$result = mysql_query("SELECT * FROM user WHERE login='$login' AND pass='$password'",$db); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['id_user']))
{
    exit ("Извините, введённый вами логин или пароль неверный."); //останавливаем выполнение сценариев
}

else 
{
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['password']=$myrow['pass']; 
        $_SESSION['login']=$myrow['login']; 
        $_SESSION['id_user']=$myrow['id_user'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    
        //Далее мы запоминаем данные в куки, для последующего входа.
        //ВНИМАНИЕ!!! ДЕЛАЙТЕ ЭТО НА ВАШЕ УСМОТРЕНИЕ, ТАК КАК ДАННЫЕ ХРАНЯТСЯ В КУКАХ БЕЗ ШИФРОВКИ

        if (isset($_POST['rememberMe']))
        {
        //Если пользователь хочет, чтобы его данные сохранились для последующего входа, то сохраняем в куках его браузера
        setcookie("login", $_POST["login"], time()+99999);
        setcookie("password", $_POST["password"], time()+09999);
        setcookie("id_user", $myrow['id_user'], time()+99909);
        }

        if (isset($_POST['autologin'])){
        //Если пользователь хочет входить на сайт автоматически
        setcookie("auto", "yes", time()+9999999);
        setcookie("login", $_POST["login"], time()+9999999);
        setcookie("password", $_POST["password"], time()+9999999);
        setcookie("id_user", $myrow['id_user'], time()+9999999);}
        } 

        echo "<html><head><meta http-equiv='Refresh' content='0; URL=Rud.php'></head></html>";
?>