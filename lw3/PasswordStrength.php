<?php
header("Content-Type: text/plain");
$password = $_GET['password'];
$strength = 0;
$digits = 0;
$upperCase = 0;
$lowerCase = 0;
$countOfChar = array();
if (ctype_alnum($password))
{
    $chars = str_split($password);
    foreach ($chars as $char)
    {
	    if (is_numeric($char))
		{
		    $digits += 1;			
		} 
		else if (ctype_upper($char))
		{
		    $upperCase += 1;
		} 
		else if (ctype_lower($char))
		{
			$lowerCase += 1;
		}
		if (array_key_exists($char, $countOfChar))
		{
		    $countOfChar[$char] += 1;	
		} 
		else
		{
		    $countOfChar[$char] = 1;	
		}
	}
	$strength += strlen($password) * 4;
	$strength += $digits * 4;
	if ($uppercase != 0)
	{
	    $strength += (strlen($password) - $upperCase) * 2;	
	}
	if ($lowercase != 0)
	{
	    $strength += (strlen($password) - $lowerCase) * 2;	
	}
	if (ctype_alpha($password))
	{
		$strength -= strlen($password);
	}
	if (is_numeric($password))
	{
		$strength -= strlen($password);
	}
	foreach ($countOfChar as $count)
	{
		if ($count > 1)
		{
		    $strength -= $count;	
		}
	}
	echo 'Your password strength is ', $strength;
}
else
{
	echo 'Your password must contain only letters and numbers';
}

