<?php
header("Content-Type: text/plain");
$text = $_GET['identifier'];
if (ctype_alnum($text) and !is_numeric($text[0]))
{
    echo 'yes';
} 
else
{
    echo 'no, identifier must start with a letter and a contain only leters and numbers';     
}