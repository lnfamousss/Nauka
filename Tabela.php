<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabele</title>
</head>
<body>
    <?php
        $zmienna = array("Dawid", "Mikołaj", "Dawid");//array służy do przechowywania wielu wartości w sobie które mozemy potem użyć znajac ich wartość (0,1,2,3,etc.)
        //array indexuje sie od 0 czyli pierwsza wartość jaka damy ma przypisane 0
        echo $zmienna[2];
    ?>
    <hr>
    
    <form action="Tabela.php" method="post">
        Imie: <input type="text" name="uczniowie"> <br>
        <input type="submit">

    <?php
        $oceny = array("Dawid"=>"5 ", "Maciek"=>"2 ", "Mikołaj"=>"4 ");//array może rowniez przechowywac informacje ktore sa przypisane do innych wartosci
        echo $oceny[$_POST["uczniowie"]];//WAŻNE!!! wyswitlamy z zmiennej $oceny metoda POST ocene ktora jest przypisana do ucznia ktory zostanie wpisany w input przez uzytkownika
    
    ?>
</body>
</html>