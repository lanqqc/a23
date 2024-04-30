<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przetwarzanie danych</title>
</head>
<body>
    <h2>Przetworzone dane osobowe</h2>
    <?php
    // Pobieranie danych z formularza
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $ulica = $_POST['ulica'];
    $nr_domu = $_POST['nr_domu'];
    $nr_mieszkania = $_POST['nr_mieszkania'];
    $miasto = $_POST['miasto'];
    $kod_pocztowy = $_POST['kod_pocztowy'];
    $rok_urodzenia = $_POST['rok_urodzenia'];

    // Wyświetlanie danych
    echo "<p><strong>Imię:</strong> $imie</p>";
    echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
    echo "<p><strong>Adres:</strong> ul. $ulica $nr_domu";
    if (!empty($nr_mieszkania)) {
        echo "/$nr_mieszkania";
    }
    echo ", $kod_pocztowy $miasto</p>";

    // Obliczanie wieku
    $wiek = date("Y") - $rok_urodzenia;

    echo "<p><strong>Wiek:</strong> $wiek lat</p>";
    ?>
</body>
</html>

