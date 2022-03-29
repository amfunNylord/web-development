<?php
header("Content-Type: text/plain");
if ((isset($_GET['email'])) and ($_GET['email'] <> ''))
{
    $file_name = './data/' .$_GET['email'] . '.txt';
    if (file_exists($file_name))
    {
        echo(file_get_contents($file_name));   
    }
    else
    {
        echo "Такого файла нет.\r\n";
    }
}
else
{
    echo "Адрес email не введён.\r\n";
}