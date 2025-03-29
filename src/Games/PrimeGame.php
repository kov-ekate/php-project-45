<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\runGame;

function isPrime(int $num)
{
    $index = 2;
    $coll = [];

    if ($num <= 1) {
        return false;
    }

    while ($index < $num) {
        if ($num % $index === 0) {
            return false;
        }
        $index++;
    }

    return true;
}

function playPrimeGame()
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $generateGameData = function () {
        $roundData = [];
        $question = rand(0, 50);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };

    runGame($generateGameData, $description);
}
