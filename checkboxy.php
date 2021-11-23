<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxy</title>
</head>
<body>
    <form action="checkboxy.php" method="POST"> <!-- metoda POST rozni sie od metody GET tym że w POST nie dajemu do wglądu aż tylu informacji uzytkownikowi-->
    Pomarańcze<input type="checkbox" name="owoce[]" value="pomarańcze "><br>
    Winogrona<input type="checkbox" name="owoce[]" value="winogrona "><br>
    Banany<input type="checkbox" name="owoce[]" value="banany "><br>
    <input type="submit">
    </form>
    
    <?php
        $owoce = $_POST["owoce"];
        echo $owoce[0];
        echo $owoce[1]; // jezeli mielibysmy tylko jedno echo z nr1 to przypisane są winogrona weic jezeli zanzaczymy pomarancze i banany to nic sie nie pojawi
        echo $owoce[2];
       
    ?>
    
</body>
</html>