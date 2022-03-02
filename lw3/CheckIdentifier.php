<?php
header("Content-Type: text/plain");

if (isset($_GET['identifier']))
{
    $text = $_GET['identifier'];
    if (ctype_alnum($text) and !is_numeric($text[0]))
    {
        echo 'Является идентификатором по SR3';
    }
    else
    {
        echo 'Не является идентификатором по SR3, так как должен содержать только буквы и цифры и не начинатсья с цифры';
    }         
}
else
{
    echo 'Идентификатор не передан';
}













