<?php
try 
{
	$con = new PDO("mysql:host=localhost:3306;dbname=bd_labestudos",
                   "root", "");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "conectou!";
} 
catch(PDOException $e) 
{
    echo 'ERRO: ' . $e->getMessage();
}
?>	