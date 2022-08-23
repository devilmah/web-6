
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>

body {
	background-image: url(gr.jpg);
	background-size: cover;
}
 .gap-2  a { 
    text-decoration: none; 
	color: #e9e8e6 !important;
   } 


    </style>
  </head>
  <body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>
<div class="d-flex flex-row-reverse p-2" >
	<div class=" gap-2" >
		<a href="/admin.php" class="btn btn-secondary" role="button" data-bs-toggle="button">Войти как администратор</a>
  	</div>
</div>

<div class=" container w-50" >
	<div class=" my-5 p-5 bg-light rounded" style="--bs-bg-opacity: .7;">
		<h2 class="text-center"> Форма </h2>
		<form action="/index.php" method="POST">

            <div class="mr-3">
  				<label for="name1" class="form-label" >Имя</label>
  				<input type="text" class="form-control <?php if ($errors['name1']) {print 'border-danger';} ?>" value="<?php print $values['name1']; ?>" name="name1" id="name1" placeholder="name">
			</div>

			<div class="mb-3">
  				<label for="email1" class="form-label">Email</label>
  				<input type="email" class="form-control <?php if ($errors['email1']) {print 'border-danger';} ?>" value="<?php print $values['email1']; ?>" name="email1" id="email1" placeholder="name@example.com">
			</div>

			<div class="mb-3">
  				<label for="date1" class="form-label">Дата рождения</label>
  				<input type="date" class="form-control <?php if ($errors['date1']) {print 'border-danger';} ?>" value="<?php print $values['date1']; ?>" name="date1" id="date1" >
			</div>
			
			<div class="d-flex justify-content-start">
				<div class="container">
					Пол<br />
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex1" value="Муж" checked>
  						<label class="form-check-label" for="sex1">Мужской</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex2" value="Жен">
  						<label class="form-check-label" for="sex2">Женский</label>
					</div>
				</div>

				<div class="container">
					Количество конечностей<br />
					<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="radio2" id="c1" value="1" checked>
  						<label class="form-check-label" for="c1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c2" value="2">
  						<label class="form-check-label" for="c2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c3" value="3" >
  						<label class="form-check-label" for="c3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c4" value="4">
  						<label class="form-check-label" for="c4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c5" value="5">
  						<label class="form-check-label" for="c5">5</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c6"value="6" >
  						<label class="form-check-label" for="c6">6</label>
					</div>
				</div>
			</div>
			

			<div class="my-3">
				Сверхспособности<br />
				<select name="options" class="form-select mt-2" multiple aria-label="Default select example" >
  					<option name="select1" selected>бессмертие</option>
  					<option name="select2" value="прохождение сквозь стены">прохождение сквозь стены</option>
  					<option name="select3" value="левитация">левитация</option>
				</select>
			</div>

			<div class="mb-3">
  				<label for="bio1" class="form-label">Биография</label>
  				<textarea class="form-control" name ="bio1" id="bio1" rows="3"><?php print $values['bio']; ?></textarea>
			</div>				
			<div class="form-check mb-3">
  				<input class="form-check-input " name="chek1" checked type="checkbox" id="chek1">
 				<label class="form-check-label" for="chek1">С контрактом ознакомлен(а)</label>
			</div>				
			<div class="d-grid gap-2" >
    			<button class="btn btn-primary" type="submit">Отправить</button>
  			</div>
		</form>
	</div>
</div>

    <!-- <form action="" method="POST">
      <input name="fio" <?//php if ($errors['fio']) {print 'class="error"';} ?> value="<?// php print $values['fio']; ?>" />
      <input type="submit" value="ok" />
    </form> -->
  </body>
</html>
