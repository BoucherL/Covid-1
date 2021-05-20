<?php   //include "../../Pouvoir.php";//test de Boucher
    
     echo '<div class="testUnitaire"><p>Test 1 creation pouvoir </p>';

     $equipement = new Equipement($mabase);
     $equipement = $equipement->createEquipementAleatoire();
     echo "<p>le nom est : ".$equipement->getNom()." ";

     $pouvoir = new Pouvoir($mabase);
     echo "Obtention de la force"

?>