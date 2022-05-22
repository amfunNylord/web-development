<!DOCTYPE html>
<html>
<head lang="ru">
  <meta charset="UTF-8">
  <title>Don`t do it</title>
  <link rel="stylesheet" href="../web/css/style31.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
<!--  todo сделать страницу для отображения ответа и функцию, которая сформирует ответ компонент с ответом  -->
<?php

$email = strtolower($_POST['email']);

$file_name = './data/' . $email . '.txt';
if (file_exists($file_name))
{
    $file = file_get_contents($file_name);
  // todo вынести в функцию парсинг строк, этото код может быть одинаковым
    $name = substr($file, strpos($file, ':', strpos($file, ':') + 1) + 1, strpos($file, "Деятельность") - strpos($file, ':', strpos($file, ':') + 1) - 1);
    $activityAndAgreed = trim($file, substr($file, 0, strpos($file, "Деятельность")));
    $activity = substr($activityAndAgreed, strpos($activityAndAgreed, ':') + 1, strpos($activityAndAgreed, "Согласие") - strpos($activityAndAgreed, ':') - 1);
    echo '<span class="get-form__output-text">Email: ' . $email . '</span><br>';
    echo '<span class="get-form__output-text">Имя: ' . $name  . '</span><br>';
    echo '<span class="get-form__output-text">Деятельность: ' . $activity . '</span><br>';
}
else
{
    echo '<span class="get-form__output-text">Данного файла не существует</span>';
}
?>
</body>
</html>
