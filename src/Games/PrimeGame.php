<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\runGame;

function isPrime(int $num)
{
    $index = 1;
    $coll = [];

    while ($index <= $num) {
        if ($num % $index === 0) {
            $coll[] = $index;
        }
        $index++;
    }

    return count($coll) === 2;
}

function playPrimeGame()
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $gameData = function () {
        $roundData = [];
        $question = rand(0, 50);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };

    runGame($gameData, $description);
}
