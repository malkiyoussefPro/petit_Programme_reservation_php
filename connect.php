<?php
$host = 'localhost';
$user = 'root';
$psw = '';
$nom_bd = 'bd_reservation';

$con =  mysqli_connect($host, $user, $psw, $nom_bd);

if(isset($con))
{
    echo "connectée ";
}else{
    echo "error du connexion";
}
?>