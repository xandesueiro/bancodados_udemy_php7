<?php
function verifyFileName($filename)
{
	if(file_exists($filename))
	{
		require_once($filename);
		echo "Arquivo ". $filename." existente <br>";
	}
}

spl_autoload_register(function($nameClass)
{
	$dirClasses = "classes";
	//$filename = $dirClasses.DIRECTORY_SEPARATOR.$nameClass.".php";
	//echo "diretorio: ". $dirClasses."<br>";
	$filename = $nameClass.".php";
	echo "class: ". $nameClass."<br>";
	echo "file: ". $filename."<br>";
	verifyFileName($filename);

})



?>
