<?php
header("Content-Type: text/plain");
if ((isset($_GET['email'])) and ($_GET['email'] <> ''))
{
    if (!is_dir('data'))
    {
        echo "sozdali papku\r\n";
        mkdir('data', 0777);        // СОЗДАНИЕ ПАПКИ
        $file_name = './data/' .$_GET['email'] . '.txt';
        if (!file_exists($file_name))
        {
            echo "sozdali file\r\n";
            $file = fopen($file_name, 'w');
		    fwrite($file, "First Name: " . $_GET['first_name'] . "\r\n");
		    fwrite($file, "Last Name: " . $_GET['last_name'] . "\r\n");
		    fwrite($file, "Email: " . $_GET['email'] . "\r\n");
		    fwrite($file, "Age: " . $_GET['age'] . "\r\n");
		    fclose($file);
        }       
    }
    else
    {
        echo "papka data suwestvuet!\n\r";
        $file_name = './data/' .$_GET['email'] . '.txt';
        if (!file_exists($file_name))
        {
            echo "sozdali file\n\r";
            $file = fopen($file_name, 'w');
		    fwrite($file, "First Name: " . $_GET['first_name'] . "\r\n");
		    fwrite($file, "Last Name: " . $_GET['last_name'] . "\r\n");
		    fwrite($file, "Email: " . $_GET['email'] . "\r\n");
		    fwrite($file, "Age: " . $_GET['age'] . "\r\n");
		    fclose($file);
        }
        else
        {
            echo "file s takim imenem suwestvuet!\n\r";
            $tempArray = file($file_name);
            if (($_GET['first_name'] <> '') and (isset($_GET['first_name'])))
		    {
			    $tempArray[0] = "First Name: " . $_GET['first_name'] . "\r\n";
		    }
		    if (($_GET['last_name'] <> '') and (isset($_GET['last_name'])))
		    {
			    $tempArray[1] = "Last Name: " . $_GET['last_name'] . "\r\n";
		    }
		    if (($_GET['age'] <> '') and (isset($_GET['age'])))
		    {
			    $tempArray[3] = "Age: " . $_GET['age'] . "\r\n";
		    } 
            file_put_contents($file_name, $tempArray); 
            echo "file perezapisan!\n\r";   
        }
    }

}
else
{
    echo "Email otsutstvuet!";
}