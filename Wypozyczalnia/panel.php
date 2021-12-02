<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))// sprawdzenie czy jestesmy zalogowani
	{
		header('Location: index.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link href="css/style.css" rel="stylesheet">
	<title>Panel Administracyjny</title>
</head>

<body>
    <div class ="panel">Panel Administracyjny</div>
    <div class = "addcar">
        Dodaj Auto
    </div>
    <div class = "confirm">
       Zatwierdź Zamówienia
    </div>
    <div class ="list">
        <ol>
    <?php
    require_once "connect.php"; 
    
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    //$marka = @$polaczenie->query("SELECT marka FROM samochody");
    $auta = @$polaczenie->query("SELECT * FROM samochody"); // wybranie wszystkiego z tabeli samochody
    $ile_aut = $auta->num_rows;	// przypisanie do ile_aut ilosci samochodow w tabeli
    for($i = 1; $i<=$ile_aut;$i++) // wypisanie samochodow
    {
    $idauta = $i; // przypisanie do zmiennej idauta aktualnego id auta ktore wypisujemy
    $auta = @$polaczenie->query("SELECT * FROM samochody WHERE id = $i");// przypisanie do auta aktualnych danych z auta z tabeli w zaleznosci od id
    $wiersz_auta = $auta->fetch_assoc(); // wrzucenie tego do tablicy assocjacyjnej
    echo "<li>".$wiersz_auta['marka']." ".$wiersz_auta['model'].'  <a href="auto.php?id='.$idauta.'">Edytuj</a> </li>'; // wypisanie modelu i marki i wyslanie do pliku auta.php aktualnego id
    }   
    ?>
        </ol>
    </div>
</body>
</html>