<?php

namespace BrainGames\Games\GcdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function generateRoundData()
{
    $coll = [];
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $correctAnswer = gmp_gcd("$num1", "$num2");
    $question = "$num1 $num2";
    $coll[] = $question;
    $coll[] = $correctAnswer;
    return $coll;
}

function playGcdGame()
{
    $description = "Find the greatest common divisor of given numbers.\n";
    runGame(function () {
        return generateRoundData();
    }, $description);
}