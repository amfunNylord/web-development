<?php

function writeInFile(string $fileName, string $email, string $name, string $activity, string $agreed): void
{
    $file = fopen($fileName, 'w');
    fwrite($file, 'Email: ' . $email . PHP_EOL);
    fwrite($file, 'Имя: ' . $name . PHP_EOL);
    fwrite($file, 'Деятельность: ' . $activity . PHP_EOL);
    fwrite($file, 'Согласие: ' . $agreed . PHP_EOL);
    fclose($file);
    echo 'Успешно записано';
}