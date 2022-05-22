<?php
require_once('functions.php');

// вынести в другой файл
//function writeInFile(string $fileName, string $email, string $name, string $activity, string $agreed): void

$email = strtolower($_POST['email']);

if (!empty($email))
{
    $name = $_POST['name'];
    $agreed = $_POST['agreed'];
    $activity = $_POST['activity'];
    //$fileName = './data/' . $email . '.txt'; // todo не относится к верхнему уровню, можно убрать в writeInFile
    if (!is_dir('data'))
    {
        mkdir('data');
    }
    writeInFile($email, $name, $activity, $agreed);
}
else
{
    echo 'Email отсутствует';
}