<?php 

include 'connect.php';

?>
<?php
        
        $q_Select = "SELECT * FROM clients";
        $result = mysqli_query($con, $q_Select);
        if ($result){
            while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>" . $row['id_client'] . 
                "</td><td>" . $row['nom_client'] . 
                "</td><td>" . $row['email_client'] . 
                "</td><td>" . $row['telephone_client'] . 
                "</td><td>" . $row['date_reservation'] .
                "</td><td>"; 
            } 
            echo "</table>";
            
        } else{
            echo "erreur des informationts";
        }

?>



