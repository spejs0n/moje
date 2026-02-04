<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
     <aside id="lewy">
        <h2>menu</h2>
        <ol>
            <li><a href="html.html">strona  glowna</a></li>
            <li><a href="https://www.kwiaty.pl"> rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">znajdz kwiaciarnie</a>
            <ul>
                <li>w warszawie</li>
                <li>w malborku</li>
                <li>w poznan</li>
            </ul>
            </li>
        </ol>
        </aside>
         <aside id="prawy">
        <h2>znajdz kwiaciarnie</h2>
        <form method="POST" action="znajdz.php">
            <label for="miasto">podaj nazwe miasta:</label>
        <input type="text" name="miasto" id="miasto">
        <input type="submit" value="SPRAWDZ">
        </form>
        <!-- tutaj pojawi sie skrypt -->
         <?php
         $baza=mysqli_connect("localhost","root","","kwiaciarnia");
         if ($baza){
            if(!empty($_POST[""])){
                echo $_
            }
         }else{
            echo "blad polaczenia";
         }
         mysqli_close($baza);
         
         ?>
        </aside>
        <footer>
            <p>strone opracowal bens</p>
        </footer>
</body>
</html>