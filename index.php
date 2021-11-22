<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        echo "<h1>Dawid</h1>"; //echo służy do wświetlania tekstu 
        echo "<hr>";
        $zmienna = 2; //zmienna zaczyna się od znaku $ może przyjmować dowolną wartość jaką jej damy
        $co = 3;
        echo "<p>$zmienna</p>"; //wyświetla wartość która jest przypisana do zmiennej
         echo "<p>2</p>"; //typ liczby zwykłej
         echo  2.0; //typ liczby z rorzwinięciem dziesietynm
        
         if($zmienna==$co){ //if sprawdza czy stwierdzenie które damy do nawiasu jest poprawne a to co niżej nie napiszemy wyswietli sie jeżeli zdanie jest prawdziwe 
             echo "okej";
         } else { // else jest stosowane gdy if nie bedzie sie zgadzac i w else definiujemy to co ma sie wyswietlic w razie gdyby if sie nie zgadzalo
             echo "<p>nie okej</p>";
         }


         $licz = 5;
         $licz++; // nie musimy pisac 5+1 zamiast tego ++
         echo $licz;
         $slowo = "<p>Cos Tam</p>";
         echo strtolower($slowo); // strtolower/upper definuja czy litery maja byc duze czy male
         echo strlen($slowo); // wyswitla liczbe obiektow wpisanych do zmiennej
         $slowo[3] = "K"; // podmienia nam litere lub cyfre ktorej kolejnosc od lewej to 3
         echo $slowo;
         echo str_replace("Kos", "Ktos", $slowo);
         echo substr($slowo, 6); // okresla to od jakiego momentu ma zostac wyswietlana nasza zmienna 6 definiuje ilosc miejsc od lewej
         echo 5 % 2; // daje reszte z dzielenia
         echo "<p></p>";
         echo max(2, 3 ); //wyswietla wieksza liczbe/min wuswietla mnijesza liczbe

         
    ?>
    <hr>
    <?php ?>
    
         <form action="index.php" method="get">
            Nazwa: <input type="text" name="name">
            <br>
            Wiek: <input type="number" name="age">
            <input type="submit">
         </form>
         Twoje imie to:<?php 
            echo $_GET["name"]// pobiera wartosc name ktora jest w inpucie i wyswietla ją
            
        ?>
        <br>
        Twoj wiek to:<?php echo $_GET["age"] ?> 
        <hr>

         <!--Tutaj sproboje stworzyc prosty kalkulator -->
         <h1>Kalkulator-dodawanie tylko :(</h1>
        <form action="index.php" method="get">
            <input type="number" name="num1">
            <br>
             <input type="number" name="num2">
            <input type="submit">
            <?php 
           Wynik: echo $_GET["num1"] + $_GET["num2"]
            ?> <!--kalkulator sluzy narazie tylko do dodawania moglbym stworzyc kilka innych do na przykald odejmowania i mnozenia ale nie ma to sensu bo psroboje zrobic jeden od wszytskiego -->
            <hr>
           
             

</body>
</html>