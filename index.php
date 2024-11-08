<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
<link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
    <h1>    Portal dla wędkarzy</h1>
    </header>
    <main>
    <h3>    Ryby zamieszkujace rzeki </h3>
    <?php

    ?>
    </main>
 <section>
    <h3> Ryby drapieżne naszych wód</h3>
    <table>
    <th>L.p.</th>
    <th>Gatunek</th>
    <th>Występowanie</th>
    <?php
    $polaczne = mysqli_connect('localhost','root','','wedkowanie');
     $zapytanie = 'SELECT id,nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1';
        $rezultat = mysqli_query($polaczne, $zapytanie);
        while($wiersz = mysqli_fetch_row($rezultat)){
            echo '<tr>';
            echo '<td>' . $wiersz[0]. '</td>';
            echo '<td>' . $wiersz[1] . '</td>';
            echo '<td>' . $wiersz[2] . '</td>';
            echo '</tr>';
        
        }
    ?>
    </table>
 
 </section>
    <aside>
<img src="ryba1.jpg" alt="sum">
<br><br>
<a href="kwerendy.txt" download>Pobierz kwerendy</a>
    </aside>
    <footer>
    <p>Strone wykonał SS </p>
    </footer>
</body>
</html>