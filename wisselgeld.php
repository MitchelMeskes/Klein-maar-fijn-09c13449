<?php
$aantal = ($argv[1]);
define("GELD", array(50,20,10,5,2,1,0.50,0.20,0.10,0.05,0.02,0.01));
foreach (GELD as $uitkomst){
    $vloer = 0;
    if ($aantal >= $uitkomst) {
        $aantal = round ($aantal, 2);
        $vloer = floor($aantal / $uitkomst);
        $aantal = $aantal - ($vloer * $uitkomst);
    }
    if ($vloer > 0){
        if ($uitkomst < 1) {
            $cent = $uitkomst * 100;
            echo "$vloer * $cent Cent".PHP_EOL;
        }
        else {
            echo "$vloer * $uitkomst Euro".PHP_EOL;
        }
    }
}