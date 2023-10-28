<?php

include 'connect.php';
?>
<?php
            
            if (isset($_POST['ajouter'])) {
                $nom = $_POST['nom_client'];
                $email = $_POST['email_client'];
                $telephone = $_POST['telephone_client'];
                $date = $_POST['date_reservation'];
        
                $query = "INSERT INTO clients (nom_client, email_client, telephone_client, date_reservation) VALUES ('$nom', '$email', '$telephone', '$date')";
        
                $result = mysqli_query($con, $query);
        
                if ($result) {
                    echo "Insertion des informations avec succès";
                } else {
                    echo "Erreur d'insertion des informations dans la BD : " . mysqli_error($con);
                }
            }

     ?>