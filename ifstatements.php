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
        $mądry = true;
        $człowiek = true;
            if($mądry && $człowiek){
                echo "Jesteś mądrym człowiekiem";
            }else if($mądry && !$człowiek){
                echo "Jesteś mądrym obcym";
            } else if(!$mądry && $człowiek){
                echo "Jesteś debilem";
            }else {
                echo "Jesteś obcym debilem";
            }
                // && czyta sie jaki and i pozwala to na w tym przypadku psrawdzenie czy druga zminna jest prawdziwa lub nie
                // || to czytamy jako or i jak nazwa wskazuje dziala jako jesli w naszej funkcji 
    
    
    ?>
    
</body>
</html>