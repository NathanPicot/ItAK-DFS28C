<?php

use php\Coin;
use php\Deck;
use php\Dice;
use php\GameMaster;

ini_set('memory_limit', '256M');

require_once 'GameMaster.php';
require_once 'Dice.php';
require_once 'Coin.php';
require_once 'Deck.php';

// Capture les trois premiers arguments de la ligne de commande
[$_, $successRate, $criticalRate, $fumbleRate] = $argv;

// Définir les taux de réussite, de critique et d'échec
$rates = [
    'success' => $successRate,
    'critical' => $criticalRate,
    'fumble' => $fumbleRate,
    'failure' => 100 - ($successRate + $criticalRate + $fumbleRate)
];

// Créer les instances des différents éléments
$dice = new Dice(6);
$coin = new Coin(1);
$deck1 = new Deck(3, 18);
$deck2 = new Deck(4, 13);

// Ajouter les éléments à la liste
$elements = [$dice, $coin, $deck1, $deck2];

// Créer une instance de GameMaster
$gm = new GameMaster($elements);

// Effectuer un tirage aléatoire
$result = $gm->pleaseGiveMeACrit();

// Afficher le résultat
echo $result;

exit(0);
?>
