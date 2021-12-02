
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link href="css/style.css" rel="stylesheet">
	<title>Auto</title>
</head>

<body>
    <div class ="list">
        <ul>
    <?php
    require_once "connect.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); // polaczenie
    //$marka = @$polaczenie->query("SELECT marka FROM samochody");
    $auta = @$polaczenie->query("SELECT * FROM samochody where id = $_GET[id]"); // zapytanie do auta w zaleznosci od wyslanego id
    $wiersz_auta = $auta->fetch_assoc(); // wrzuecenie tego do tablicy assocjacyjnej
    echo "<li> Marka : ".$wiersz_auta['marka']."</li>";  
    echo "<li> Model : ".$wiersz_auta['model']."</li>";  
    echo "<li> Cena : ".$wiersz_auta['cena']."</li>";  
    echo "<li> Rok Prodkucji : ".$wiersz_auta['rok_produkcji']."</li>";  
    echo "<li> Pojemnosc Silnika : ".$wiersz_auta['poj_silnika']."</li>";  
    echo "<li> Liczba Koni Mechanicznych : ".$wiersz_auta['liczba_koni']."</li>";  
    echo "<li> Srednie Spalanie : ".$wiersz_auta['sr_spalanie']."</li>"; 
    echo "<li> Cena za 1h : ".$wiersz_auta['cena_1h']."</li>";  
         
    ?>
        </ul>
    </div>
</body>
</html>