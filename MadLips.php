 <!-- Gra w zgadywanie slow (Mad Libs)-->
 <form action="index.php" method="get">
            Color:<input type="text" name="color"> <br>
            Prular Noun:<input type="text" name="pluralnoun"><br>
            Celebrity:<input type="text" name="celebrity"><br>
            <input type="submit"> <!-- po wpisaniu w inputy brakujących słow wyświtla się one w brakujących miejscach -->
               <?php
               $color = $_GET["color"];
               $pluralnoun = $_GET["pluralnoun"];
               $celebrity = $_GET["celebrity"];
                echo "Roses are $color<br>";
                echo "$pluralnoun are blue <br>";
                echo "I hate $clebrity<br>";
               
               ?>
            