<?php

    $vetorDeStrings = ["Kaylane", "Barbara", "Sabrina Damiani", "Aline"];

    echo "<br/ ><br />";

    print_r($vetorDeStrings);

    echo "<br/ ><br />";

    foreach($vetorDeStrings as $nomes){
        if($nomes == "Kaylane") echo "Encontrado";
        }
?>