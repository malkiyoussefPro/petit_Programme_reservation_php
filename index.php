
<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="style.css">
    <title>Resevation</title>
</head>
<body>
    <!--  Debut de la page -->
<div class="reservation">
    <form action="select.php" method="POST">
        <nav>
            <img src="./images/56943302-42275190.jpg" alt="" >
         <div class="nom">
            <h2>Reservation</h2>
             <label for="" > Nom du client</label>
             <!-- le nom du name c'est l'attribut de la base donnée -->
             <input type="text" name="nom_client">
         </div>
         <div class="email">
             <label for="" > Email du client</label>
             <input type="email" name="email_client">
         </div>
 
         <div class="adresse">
             <label for="" > Telephon du client</label>
             <input type="text" name="telephone_client">
         </div>

         <div class="date">
             <label for="" > Date </label>
             <input type="date" name="date_reservation">
         </div>
 
         <button type="reset">Reinitialiser</button>
         <button type="submit" name = "ajouter">Ajouter</button>
         <div class="socialMedia">
             <i class="lni lni-facebook-fill"></i>
             <i class="lni lni-instagram-fill"></i>
             <i class="lni lni-share"></i>
         </div>
        </nav>
        <!--  Fin de la page -->
     </form>



</div>
    <!--  Debut des information -->

        <div class="info">
            <table>
                <tr>
                    <th>Id </th>
                    <th>Nom du client</th>
                    <th>Email du client</th>
                    <th>Telephone du client</th>
                    <th>Date du reservation</th>
                </tr>

               
              <?php

                    include 'select.php';
              ?>

            </table>
        </div>
    <!--  Fin des information -->

    
</body>
</html>