<?php
$path = 'img/';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
  echo 'Что-то пошло не так';
 else
  echo 'Загрузка удачна';
}
?>