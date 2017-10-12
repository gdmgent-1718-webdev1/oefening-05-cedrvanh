<?php 

function ageChecker($age) {
    if($age < 16) {
        return "${age} jaar is te jong voor deze film.";
    } else if ($age >= 16 && $age <18) {
        return "${age} jaar, je hebt ouderlijk toezicht nodig.";
    } else {
        return "Je bent al ${age} jaar. Geniet van de film";
    }
}

for ($i = 1; $i <= 20; $i++) {
    echo ageChecker($i) . PHP_EOL;
}