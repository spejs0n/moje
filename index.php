<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwsze PHHP</title>
</head>
<body>
    <header>
        <h1>Strona klasy 3TIE</h1>
    </header>
    <main> 
    <?php
        // wyświetlenie danych na ekran
        echo "Leon mówi, że co";
        // deklaracja zmiennej
        $zmienna=" patapon powiedział Marek";
        $zmienna1=" Marek powiedział jak sie urodzi tak bedzie";
        // wyświetlanie zmiennej
        echo $zmienna;
        echo $zmienna1;
        // wykorzystanie HTML w PHP
        echo "<h3>tekst w nagłówku 3 stoapnia </3h>";
        // działania na zmiennych
        $liczba1=10.1;
        $liczba2=8.3;
        echo "wynik dodawania: ";
        echo $liczba1+$liczba2;
         $liczba3=10.1;
        $liczba4=8.3;
        echo "wynik odejmowania: ";
        echo $liczba3-$liczba4;
         $liczba5=10.1;
        $liczba6=8.3;
        echo "wynik mnożenia: ";
        echo $liczba5*$liczba6;
         $liczba7=10.1;
        $liczba8=8.3;
        echo "wynik dzielenia: ";
        echo $liczba7/$liczba8;

    // potęgowanie liczb
    $wynik=pow(4,3);
    echo "wynik potęgowania liczby 4 do potęgi 3 to:".$wynik;
    // pierwsiatek kwadratowy
    $wynik=sqrt(64);
    echo "Pierwiastek kwadratowy z liczby 64 to: $wynik";
    ?>
    </main>
    <footer>
    <p> Stronę wykonał Zbyszek </p>
    </footer>
</body>
</html>