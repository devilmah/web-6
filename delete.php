<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
try {
  $stmt = $db->prepare("DELETE FROM users WHERE `login`='".$_POST['login']."'");

echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'>  Данные удалены! </h2></div></div>";
$stmt->execute();


}
catch(PDOException $e){
  echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'> Ошибка : " . $e->getMessage() . "</h2></div></div>";
  exit();
}
}