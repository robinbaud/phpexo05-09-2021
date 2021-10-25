<?php

$annuaire = file_get_contents("annuaire.json");
$json = json_decode($annuaire);

function recherche($nom, $json){
    $min = 0;
    $max = count($json);
    $mid = ($min + $max)/2;
    $midarrondie = intval($mid);
    $resultat = false;
    $acce = 0;

    while($resultat == false && $min < $max){
        if($nom == $json[$midarrondie]->{'name'}){
            $resultat = true;
            break;
        }
        else if($nom < $json[$midarrondie]->{'name'}){
            $max = $midarrondie - 1;
            $acce++;
        }
        else if($nom > $json[$midarrondie]->{'name'}){
            $min = $midarrondie + 1;
            $acce++;
        }
        $midarrondie = intval(($min + $max)/2);
    }

    if($nom == $json[$midarrondie]->{'name'}){
        $lastmid = $midarrondie+1;
        echo "numero:";
        echo ($json[$midarrondie]->{'num'}).PHP_EOL;
        echo"Position: $lastmid".PHP_EOL;
        echo "Nombre d'accés:  $acce".PHP_EOL;
    }else{
        echo "NOPE!".PHP_EOL;
    }
    echo $json[$midarrondie]->{'name'};
}

recherche($argv[1], $json);