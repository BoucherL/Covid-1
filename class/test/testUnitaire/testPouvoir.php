<?php   //include "testUnitaire/test/Pouvoir.php"//test de Boucher
    
     echo '<div class="testUnitaire"><p>Test 1 creation pouvoir </p>';

     $pouvoir = new Equipement($mabase);
     $pouvoir = $pouvoir->createEquipementAleatoire();

?>