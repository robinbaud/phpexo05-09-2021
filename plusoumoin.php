<?php


$number = rand(0, 50);
function devinelechiffre($vie, $number)
{
    var_dump($number);
    $isnumber = true;
    $keypress = 1;
    while (($vie > 0 && $keypress !== $number)) {
        $keypress = readline("entre un ciffre: ");
        for ($i = 0; $i < strlen($keypress); $i++) {
            if ($keypress[$i] < 0 | $keypress[$i] > 9) {
                echo "tape un chiffre".PHP_EOL;
                $isnumber = false;
            }else{
                $isnumber = true;
            }
        }
        if ($vie > 0 && $isnumber == true) {
            if ($keypress < $number) {
                echo "c'est plus".PHP_EOL;
                $vie = $vie - 1;
                echo "il vous reste $vie vie".PHP_EOL;

            } elseif ($keypress > $number) {
                echo "c'est moins".PHP_EOL;
                $vie = $vie - 1;
                echo "il vous reste $vie vie".PHP_EOL;
            } else {
                echo "c'est gagner".PHP_EOL;
                die;
            }
        }
    }
    echo "vous avez perdu".PHP_EOL;
    die;
};

devinelechiffre($argv[1], $number);
var_dump($argv);
