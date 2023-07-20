<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("mysql-191622.srv.hoster.ru", "srv191622_admin1", "Gfhjkm1", "srv191622_bd1");

if ($mysqli == false) {
  print("повторите отправку формы");
} else {
  $email = trim(mb_strtolower($_POST["email"]));
  $tel = trim(mb_strtolower($_POST["tel"]));
  $name = trim(mb_strtolower($_POST["name"]));
  $hidden = trim(mb_strtolower($_POST["hidden"]));
  $textArea = trim(mb_strtolower($_POST["textArea"]));

  $mysqli->query("INSERT INTO `diplom`(`email`, `tel`, `name`, `text`, `zakaz`) VALUES ('$email', '$tel', '$name', '$textArea', '$hidden');");
}
