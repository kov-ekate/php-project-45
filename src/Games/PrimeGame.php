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

    if (count($coll) === 2) {
        return 'yes';
    } else {
        return 'no';
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
