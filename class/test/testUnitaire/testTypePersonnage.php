<?php 
    //test boucher
    echo '<div class="testUnitaire"><p>Test</p>';
    
    //$personnage = new TypePersonnage($mabase);

    $personnage = new Personnage($mabase);
    
    $personnage->setEntiteById($idEntitePersonnage);

    echo '<p>Le nom du perso est '.$personnage->getNom().'</p>';

    echo "<p> le id est : ".$personnage = $personnage->getId()." </p>";

    $typepersonnage = new TypePersonnage($mabase);

    echo $typepersonnage->setTypePersonnageById(1);

    var_dump($typepersonnage);

    echo '<p>Id type personnage '.$typepersonnage->getId().'</p>';
    echo '<p> Nom '.$typepersonnage->getNom().'</p>';


?>