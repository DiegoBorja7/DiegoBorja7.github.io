<?php
    $destination="diego_anddy95@hotmail.com";
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
    $menssage="Latitud: "+$latitude+"\nLongitud:"+$longitude;
    mail($destination,"Coordenadas",$menssage);
    echo"<script>alert('se ha enviado el msj')</script>";
?>