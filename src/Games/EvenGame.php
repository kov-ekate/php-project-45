<?php

namespace BrainGames\Games\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function isEven(int $num)
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function generateRoundData()
{
    $coll = [];
    $question = rand(0, 1000);
    $correctAnswer = isEven($question);
    $coll[] = $question;
    $coll[] = $correctAnswer;
    return $coll;
}

function playEvenGame()
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    runGame(function () {
        return generateRoundData();
    }, $description);
}
