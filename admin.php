<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

<?php

include('bd.php');
echo "<body style='background-image: url(gr.jpg);background-size: cover;'>";

/**
 * Задача 6. Реализовать вход администратора с использованием
 * HTTP-авторизации для просмотра и удаления результатов.
 **/

// Пример HTTP-аутентификации.
// PHP хранит логин и пароль в суперглобальном массиве $_SERVER.
// Подробнее см. стр. 26 и 99 в учебном пособии Веб-программирование и веб-сервисы.
?>
<div class="d-flex flex-row-reverse p-2" >
	<div class=" gap-2" >
		<a href="/index.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Форма</a>
  	</div>
</div>

<div class=" container " >
	<div class=" my-5 p-5 bg-light rounded" style="--bs-bg-opacity: .7;">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>

		<h2 class="text-center"> Форма </h2>
    <form action="" method="post">
      <div class="mr-3">
  				<label for="login" class="form-label" >Логин</label>
          <input type="text" class="form-control" value="admin" name="login" id="login">
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

  if (empty($_POST['login']) ||
    empty($_POST['pass']) ||
    $_POST['login'] != 'admin' ||
    md5($_POST['pass']) != md5('123')) {
 
    print('<h1 class="text-center"> Неверные данные для авторизации </h1>');
    exit();
    }
    else{
      print('<h2 class="text-center"> Пользовательские данные</h2>');
      print('<p class="text-center text-muted">Вы успешно авторизовались и видите защищенные паролем данные.</p>');
      $users = $db->query("SELECT * FROM `users` ORDER BY `id` ");
      $user = $users->fetch();
      ?>
        <div class="container text-center">
          <div class="row text-white mb-1" style="background-color: #5b7d56;">
                 <div class="col ">
                   Имя
                  </div>
                  <div class="col">
                   Логин
                  </div>
                  <div class="col-2">
                  email
                  </div>
                  <div class="col ">
                   Дата рождения
                  </div>
                  <div class="col ">
                   Пол
                  </div>
                  <div class="col ">
                   Количество конечностей
                  </div>
                  <div class="col ">
                   Сверхспособности
                  </div>
                  <div class="col-2 ">
                   Биография
                  </div>

  </div>
      <?php
        while(!empty($user))
        {
          ?>

              <div class="row mb-1">
                 <div class="col">
                   <?php print($user['firstname']);?>
                  </div>
                  <div class="col text-muted">
                   <?php print($user['login']);?>
                  </div>
                  <div class="col-2 ">
                   <?php print($user['email']);?>
                  </div>
                  <div class="col ">
                   <?php print($user['bdate']);?>
                  </div>
                  <div class="col">
                   <?php print($user['sex']);?>
                  </div>
                  <div class="col">
                   <?php print($user['amount']);?>
                  </div>
                  <div class="col">
                   <?php print($user['ability']);?>
                  </div>
                  <div class="col-2">
                   <?php print(substr($user['bio'],0,15)." ...");?>
                  </div>

  </div>

        <?php

          $user = $users->fetch();
        }
        print("</div>");
        
        $cs = $db->query("SELECT COUNT(*) FROM `users` WHERE `ability`= 'бессмертие'");
        $immortality = $cs->fetch();
        $cs = $db->query("SELECT COUNT(*) FROM `users` WHERE `ability`= 'прохождение сквозь стены'");
        $ghostliness = $cs->fetch();
        $cs = $db->query("SELECT COUNT(*) FROM `users` WHERE `ability`= 'левитация'");
        $levitation =  $cs->fetch();
        ?>        
  <script src="https://www.google.com/jsapi"></script>
  <script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Способности', 'Бессмертие','Прохождение сквозь стены','Левитация'],
     ['', <?php print($immortality[0].",".$ghostliness[0].",".$levitation[0])?>],

    ]);
    var options = {
     title: 'Способности пользователей сайта',
     hAxis: {title: 'Способности'},
     vAxis: {title: 'Количество пользователей'}
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('capabilities'));
    chart.draw(data, options);
   }
  </script>
<div id="capabilities" style=" margin: 5% 0; height: 400px;"></div>

   <div class="">
    <form action="change.php" method="post">
      <label for="login" class="form-label" >Изменить данные пользователя</label>
      <div class="d-flex justify-content-start mt-2">
              <input type="text" class="form-control w-50" value="Логин" name="login" id="login">
        			<button class="btn btn-primary mx-3" type="submit">Изменить</button>
      </div>
    </form>
  </div>
  <div class="">
    <form action="delete.php" method="post">
      <label for="login" class="form-label" >Удалить данные пользователя</label>
      <div class="d-flex justify-content-start mt-2">
              <input type="text" class="form-control w-50" value="Логин" name="login" id="login">
        			<button class="btn btn-primary mx-3 w-10" type="submit">Удалить</button>
      </div>
    </form>
  </div>
</div>
<?php

    }

}
?>

	</div>
</div>
