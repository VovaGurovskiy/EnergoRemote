<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

if (isset($_COOKIE['auto']) and isset($_COOKIE['login']) and isset($_COOKIE['password']))
{//если есть необходимые переменные
	if ($_COOKIE['auto'] == 'yes') { // если пользователь желает входить автоматически, то запускаем сессии
		  $_SESSION['password']=$_COOKIE['password']; //в куках пароль был не зашифрованный, а в сессиях обычно храним зашифрованный
		  $_SESSION['login']=$_COOKIE['login'];//сессия с логином
		  $_SESSION['id_name']=$_COOKIE['id_name'];//идентификатор пользователя
		}	
	}

if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
//если существет логин и пароль в сессиях, то проверяем их и извлекаем id
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result = mysql_query("SELECT id_user FROM user WHERE login='$login' AND pass='$password'",$db); 
$myrow = mysql_fetch_array($result);
    
//извлекаем нужные данные о пользователе
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ENERGOREMOTE SYSTEM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<link href="font/css/font-awersome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body  >
      
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-2"> 
              </div>
              <div class="col-md-8"> 
                <div class="row">
                  <div class="col-md-5 hrr"> 
                  </div>
                  <div class="col-md-2"> 
                  </div>
                  <div class="col-md-5 hrr"> 
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12 hrr2">
                        <h2 class="pull-center txt1 text-center">Help us make a better world</h2>
                        <h2 class="pull-center txt1 text-center"><strong>FOR EVERYONE ON THIS PLANET</strong></h2>
                        <h6 class="pull-center text-center"> ENERGOREMOTE SYSTEM </h6>
                    </div>
                </div>
               
              </div>
              <div class="col-md-2"> 
              </div>
              </div>  
            <div class="row">
              <div class="col-md-2"> 
              </div>
              <div class="col-md-8"> 
                <div class="row">
                  <div class="col-md-12"> 
                    <div class="row">
                      <div class="col-md-4"> 
                        <div class="row">
                          <div class="col-md-12"> 
                            <div class="row">
                              <div class="col-md-12"> 
                                <img src="img/f1.png" class="fig1 img-responsive ">                                  
                                 <span class ="mt"><strong>ECOLOGICALLY</strong>
                                  <br>Reduced electricite use
                                 </span> 

                              </div>
                               </div>
                            <div class="row">
                              <div class="col-md-12"> 
                                  <img src="img/fi2.png"class="fig1 img-responsive mt2">    
                                   <span class ="mt"><strong>ECONOMICALLY</strong>
                                    <br>Spent less money on bills</span> 
                                   
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-12"> 
                                <img src="img/fi3.png" class="fig1 img-responsive mt2">
                                 <span class ="mt"><strong>TECHNOLOGICALLY</strong>
                                  <br>Full automated system</span> 
                               
                              </div>
                            </div>                               
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4"> 
                      </div>
                      <div class="col-md-4"> 
                         <div class="form-group">

<?php
if (!isset($myrow['id_user']) or $myrow['id_user']=='') {
//проверяем, не извлечены ли данные пользователя из базы. Если нет, то он не вошел, либо пароль в сессии неверный. Выводим окно для входа. Но мы не будем его выводить для вошедших, им оно уже не нужно.
print <<<HERE
<form action="login.php" method="post">
<!-- login.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку login.php методом "post"  -->
  <div class="icon-addon addon-md">
                              <input type="text" placeholder="Login" class="form-control f" id="username" name="login">
                              <label for="username" class="glyphicon glyphicon-user" rel="tooltip" title="username"></label>
HERE;

	
if (isset($_COOKIE['login'])) //есть ли переменная с логином в COOKIE. Должна быть, если пользователь при предыдущем входе нажал на чекбокс "Запомнить меня"
{
//если да, то вставляем в форму ее значение. При этом пользователю отображается, что его логин уже вписан в нужную графу
echo ' value="'.$_COOKIE['login'].'">';
}


print <<<HERE
 </div>
                              <div class="icon-addon addon-md">
                              <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                              <label for="password" class="glyphicon glyphicon-lock" rel="tooltip" title="password"></label>
HERE;

	
if (isset($_COOKIE['password']))//есть ли переменная с паролем в в COOKIE. Должна быть, если пользователь при предыдущем входе нажал на чекбокс "Запомнить меня"
{
//если да, то вставляем в форму ее значение. При этом пользователю отображается, что его пароль уже вписан в нужную графу
echo ' value="'.$_COOKIE['password'];
}
	
print <<<HERE
   </div> 
<!-- В поле для паролей (name="password" type="password") пользователь вводит свой пароль -->  
  <p>
    <input name="rememberMe" type="checkbox" value='1'> Запомнить меня.
  </p>
 <!-- <p>
    <input name="autologin" type="checkbox" value='1'> Автоматический вход.
  </p>--> 
<div>
    <p>
HERE;
    
echo $error;
print <<<HERE
    </p>
</div>
<button class="btn btn-md btn-primary btn-block "  name="Submit" value="Login" type="Submit">SIGN IN</button>     
</div>

<a class="btn btn-md btn-primary btn-block " href="reg.php">SIGN UP</a> 


</form>

HERE;
}
?>
</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2"> 
              </div>   
            </div>
          
          <div class="row">

                                <div class="col-md-2"> </div>
                                 <div class="col-md-8"> 
                    <div class="row">
                      <div class="col-md-2"> </div>
                      <div class="col-md-8"> 
                    <div class="row">
                       <div class="col-md-2"> </div>
                        <div class="col-md-8">
                        <div class="row">
                          <div class="col-md-6 text-center ots"> 
                                    
                                       <img src="img/apple.png"class="fig1">
                                  <br>
                                   <span class ="mt3"><strong>APPLE</strong></span>
                                    <br>
                                    <br>
                                   SOON
                                      
                                   <span class =" dpb"><small>Take control with Apple phone app</small> </span>
                                    
                                   <button class="btn btn-sm btn-primary collorbtn2"  name="Submit" value="Login" type="Submit">more info</button>
                                    </div> 

                                 <div class="col-md-6 text-center ots">
                                  <img src="img/andr.png"class="fig1">
                                  <br>
                                   <span class ="mt3"><strong>ANDROID</strong></span>

                                   <br>
                                   <br>
                                   SOON
 <br>
                                   <span class ="dpb"><small>Take control with Android phone app</small></span>                                            
                                   
                                   <button class="btn btn-sm btn-primary collorbtn2"  name="Submit" value="Login" type="Submit">more info</button> 
                                 </div>
                        </div> 




                        </div>
                         <div class="col-md-2"> </div>
                                 
                    </div>
                      </div>
                      <div class="col-md-2"> </div>
                    </div>
                                 </div>
                                 
                                  <div class="col-md-2"> </div>
                                  

          </div>




        </div>

       
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>