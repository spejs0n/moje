<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <section id="lewy">
    <h2>Nasze ceny</h2>    
     <table>
        <?php

use Dom\Mysql;

            $polacznie=mysqli_connect("localhost","root","","sklepik");
            if($polacznie){
                echo "wszystko dziala";
                echo "<br>";
                $zapytanie1= "SELECT nazwa, cena FROM towary LIMIT 4;";
                $wynik=mysqli_query($polacznie,$zapytanie1);
                while($wiersz=mysqli_fetch_array($wynik)){
                   // echo $wiersz["nazwa"]."<br>";
                   echo "<tr>";
                //    echo "<td>";
                //    echo $wiersz["id"];
                //    echo "</td>";
                    echo "<td>";
                   echo $wiersz["nazwa"];
                   echo "</td>";
                    echo "<td>";
                   echo $wiersz["cena"];
                   echo "</td>";
                   echo "</tr>";
                }
            }else{
                echo "błąd połączenia";
            }
        ?>
        </table>
    </section>
    <section id="srodkowy">
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="POST">
            <label>wybierz artykuł: </label>
            <select name="towary">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartek">Zeszyt 32 kartki</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
            </select>
            <br>
            <label>liczba sztuk: </label>
            <input type="number" name="liczba">
            <br>
            <input type="submit" value="OBLICZ">
        </form>
        <!-- tutaj pojawi się skrypt 2 -->
         <?php
         if(!empty($_POST["towary"])){
            $towary=$_POST["towary"];
            $liczba=$_POST["liczba"];
            echo $liczba." ".$towary;
            $connect=mysqli_connect("localhost","root","","sklepik");
            if($connect){
                $sql="select cena from towary where nazwa='".$towary."'";
                "'";
                $query=mysqli_query($connect,$sql);
                while($row=mysqli_fetch_array($query)){
                    echo "wartosc zakupow: "
                    echo $row['cena']*$liczba;
                }
            Mysqli_close($connect);

            }else{
                echo "blad polaczenie;";
            }
         }
         ?>
    </section>
    <section id="prawy">
        
    </section>
    <footer>
    
    </footer>
</body>
</html>