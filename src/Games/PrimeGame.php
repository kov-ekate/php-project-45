<?php

namespace BrainGames\Games\PrimeGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function isPrime($num)
{
    if (gmp_prob_prime($num) == 0) { 
        return 'no';
    } elseif (gmp_prob_prime($num) == 2) {
        return 'yes';
    }
}

function generateRoundData()
{
    $coll = [];
    $question = rand(0, 50);
    $correctAnswer = isPrime($question);
    $coll[] = $question;
    $coll[] = $correctAnswer;
    return $coll;
}

function playPrimeGame()
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    runGame(function () {
        return generateRoundData();
    }, $description);
}
