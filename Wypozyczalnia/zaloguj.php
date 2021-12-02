<?php

	session_start(); // rozpoczecie nowej sesji
	if ((!isset($_POST['login'])) || (!isset($_POST['password']))) // petla sprawdzajaca czy zostaly wpisane dane do loginu i hasla
	{
		header('Location: index.php'); // przekierowanie na strone glowna
		exit();
	}

	require_once "connect.php"; // nasz plik widzi wszystko z pliku connect.php

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); // ustanowienie polaczenia z baza na zasadzie plikowow z connect.php
	
	if ($polaczenie->connect_errno!=0) // sprawdzenie czy udalo nam sie polaczyc
	{
		echo "Error: ".$polaczenie->connect_errno;// wywalenie erroru przy blednym polaczeniu
	}
	else
	{
		$login = $_POST['login']; // przypisanie do zmiennej login tego co wpisalismy
		$haslo = $_POST['password']; // to samo z haslem
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8"); // ...
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8"); // ...
	
		if ($rezultat = @$polaczenie->query( // zapytanie do bazy o login i haslo i sprawdzenie czy taki uzytkownik istnieje
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND password='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows; // przypisanie do ilu_userow ilosci wierszy z zapytania
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				//$wiersz_login = $rezultat->fetch_assoc();
				//$_SESSION['id'] = $wiersz_login['id'];
				//$_SESSION['user'] = $wiersz_login['user'];
				//$_SESSION['email'] = $wiersz_login['email'];
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: panel.php');
				
			}	
				//$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				//header('Location: index.php');
				
			
		}
		
		$polaczenie->close(); // zakonczenie polaczenia
	}
	
?>