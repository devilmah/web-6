<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="d-flex flex-row-reverse p-2" >
  <div class=" gap-2" >
    <a href="/index.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Форма</a>
    </div>
    </div>
<?php
echo "<body style='background-image: url(gr.jpg);background-size: cover;'>";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  exit();
}
include('bd.php');
$users = $db->query("SELECT * FROM `users` WHERE `login`='".$_POST['login']."'");
$user = $users->fetch();
if(empty($user)){
   echo("Нет такого пользователя");
}
else
{


?>
<div class=" container w-50" >
	<div class=" my-5 p-5 bg-light rounded" style="--bs-bg-opacity: .7;">
		<h2 class="text-center"> Изменение пользовательских данных </h2>
		<form action="/insert.php" method="POST">

            <div class="mr-3">
  				<label for="name1" class="form-label" >Имя</label>
  				<input type="text" class="form-control" value="<?php print $user['firstname']; ?>" name="name1" id="name1" placeholder="name">
			</div>

			<div class="mb-3">
  				<label for="email1" class="form-label">Email</label>
  				<input type="email" class="form-control " value="<?php print $user['email']; ?>" name="email1" id="email1" placeholder="name@example.com">
			</div>

			<div class="mb-3">
  				<label for="date1" class="form-label">Дата рождения</label>
  				<input type="date" class="form-control " value="<?php print $user['bdate']; ?>" name="date1" id="date1" >
			</div>
			
			<div class="d-flex justify-content-start">
				<div class="container">
					Пол<br />
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex1" value="Муж" <?php if($user['sex']=="Муж")print('checked'); ?>>
  						<label class="form-check-label" for="sex1">Мужской</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex2" value="Жен" <?php if($user['sex']=="Жен")print('checked'); ?>>
  						<label class="form-check-label" for="sex2">Женский</label>
					</div>
				</div>

				<div class="container">
					Количество конечностей<br />
					<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="radio2" id="c1" value="1" <?php if($user['amount']=="1")print('checked'); ?>>
  						<label class="form-check-label" for="c1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c2" value="2" <?php if($user['amount']=="2")print('checked'); ?>>
  						<label class="form-check-label" for="c2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c3" value="3" <?php if($user['amount']=="3")print('checked'); ?>>
  						<label class="form-check-label" for="c3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c4" value="4" <?php if($user['amount']=="4")print('checked'); ?>>
  						<label class="form-check-label" for="c4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c5" value="5" <?php if($user['amount']=="5")print('checked'); ?>>
  						<label class="form-check-label" for="c5">5</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c6"value="6" <?php if($user['amount']=="6")print('checked'); ?>>
  						<label class="form-check-label" for="c6">6</label>
					</div>
				</div>
			</div>
			

			<div class="my-3">
				Сверхспособности<br />
				<select name="options" class="form-select mt-2" multiple aria-label="Default select example" >
  					<option name="select1" <?php if($user['ability']=="бессмертие")print('selected');?>>бессмертие</option>
  					<option name="select2" value="прохождение сквозь стены" <?php if($user['ability']=="прохождение сквозь стены")print('selected');?>>прохождение сквозь стены</option>
  					<option name="select3" value="левитация" <?php if($user['ability']=="левитация")print('selected'); ?>>левитация</option>
				</select>
			</div>

			<div class="mb-3">
  				<label for="bio1" class="form-label">Биография</label>
  				<textarea class="form-control" name ="bio1" id="bio1" rows="3"><?php print $user['bio']; ?></textarea>
			</div>
      <div class="mb-3 invisible">
  				<input type="text" class="form-control invisible" value="<?php print $user['login']; ?>" name="login" id="login">
			</div>							
			<div class="d-grid gap-2" >
    			<button class="btn btn-primary" type="submit">Отправить</button>
  			</div>
		</form>
	</div>
</div>
<?php

}