<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'trida.php'; // include třídy
        $vypocet = new matika(50); // vytvoření oběktu
        $vypocet->pricti(50); // použití funkcí
        $vypocet->odecti(50);
        $vypocet->vydel(2);
        echo $vypocet; // výpis výsledku
        echo $vypocet->vypis_histori(); // výpis historie
        ?>
    </body>
</html>
