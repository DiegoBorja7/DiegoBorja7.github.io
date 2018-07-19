<?php
    $document=new DomDocument;
    $document->loadHTMLfile('index.html');
    $destination="diego_anddy95@hotmail.com";
    $latitude=$document->getElementByID('latitude');
    $longitude=$document->getElementByID('longitude');
    $menssage="Latitud: "+$latitude+"\nLongitud:"+$longitude;
    mail($destination,"Coordenadas",$menssage);    
?>