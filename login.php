<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

<?php

include('bd.php');
echo "<body style='background-image: url(gr.jpg);background-size: cover;'>";
/**
 * Файл login.php для не авторизованного пользователя выводит форму логина.
 * При отправке формы проверяет логин/пароль и создает сессию,
 * записывает в нее логин и id пользователя.
 * После авторизации пользователь перенаправляется на главную страницу
 * для изменения ранее введенных данных.
 **/

// Отправляем браузеру правильную кодировку,
// файл login.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');

// Начинаем сессию.
session_start();

// В суперглобальном массиве $_SESSION хранятся переменные сессии.
// Будем сохранять туда логин после успешной авторизации.
if (!empty($_SESSION['login'])) {
  // Если есть логин в сессии, то пользователь уже авторизован.
  // TODO: Сделать выход (окончание сессии вызовом session_destroy()
  //при нажатии на кнопку Выход).
  ?>
<form action="" method="post">

  <input type="submit" value="Выход" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_destroy();
     header('Location: ./');
}
  // Делаем перенаправление на форму.
 
}
?>
<div class=" container " >
	<div class=" my-5 p-5 bg-light rounded" style="--bs-bg-opacity: .7;">
  <?php
// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>

		<h2 class="text-center"> Форма </h2>
    <form action="" method="post">
      <div class="mr-3">
  				<label for="login" class="form-label" >Логин</label>
          <input type="text" class="form-control"  name="login" id="login">
      </div>
      <div class="mr-3">
          <label for="pass" class="col-sm-2 col-form-label">Пароль</label>
          <input type="password" class="form-control" name="pass" id="pass">
      </div>
      <div class="mt-4 d-grid gap-2" >
    			<button class="btn btn-primary" type="submit">Войти</button>
  		</div>
    </form>
	</div>
</div>

<?php
}
// Иначе, если запрос был методом POST, т.е. нужно сделать авторизацию с записью логина в сессию.
else {

  //$stmt = $db->prepare("SELECT pass FROM `users` WHERE `users`.`login` = :login");
  $stmt = $db->query("SELECT pass FROM users WHERE login = '".$_POST['login']."'");
    /*$stmt->bindParam(':login', $_POST['login']);
    $stmt->execute();
    $stmt->bindColumn($pass);*/
    $pass= $stmt->fetch();
    if(empty($pass))
    {
      echo("Нет такого пользователя");
    }else{

    if($pass['pass'] != md5($_POST['pass']))
    {
      echo("Неверный пароль");
    }else{
  // Если все ок, то авторизуем пользователя.
  $_SESSION['login'] = $_POST['login'];
  // Записываем ID пользователя.
  $_SESSION['uid'] = 123;
    
  // Делаем перенаправление.
  header('Location: ./');
  }
    }
}
?>

	</div>
</div>
