<?php
header("Content-Type: text/plain");

$digits = 0;
$strength = 0;
$lowerCase = 0;
$upperCase = 0;
$duplicates = 0;

if (isset($_GET['password']))
{
	$password = $_GET['password'];
	if (ctype_alnum($password))
	{
		$digits = strlen(preg_replace('/[^0-9]/ui', '', $password));
		$lowerCase = strlen(preg_replace('/[^a-z]/', '', $password));
		$upperCase = strlen(preg_replace('/[^A-Z]/', '', $password));
		$chars = count_chars($password, 1);
		foreach ($chars as $char)
		{
			if ($char > 1)
			{
				$duplicates += $char;
			}
		}
		$strength += 4 * (strlen($password) + $digits);
		if ($upperCase != 0)
		{
			$strength += 2 * (strlen($password) - $upperCase);
		}
		if ($lowerCase != 0)
		{
			$strength += 2 * (strlen($password) - $lowerCase);
		}
		if (ctype_alpha($password))
		{
			$strength -= strlen($password);
		}
		if (ctype_digit($password))
		{
			$strength -= strlen($password);
		}
		$strength -= $duplicates;
		echo 'Сила пароля = ', $strength;
	}
	else
	{
		echo 'Пароль должен содержать только цифры и английские символы';
	}
}
else
{
	echo 'Пароль не передан';
}