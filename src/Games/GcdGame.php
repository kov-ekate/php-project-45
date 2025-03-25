<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Engine\runGame;

function gcd(int $num1, int $num2)
{
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }

    return $num1;
}


function generateRoundData()
{
    $coll = [];
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $correctAnswer = gcd($num1, $num2);
    $question = "{$num1} {$num2}";
    $coll[] = $question;
    $coll[] = $correctAnswer;

    return $coll;
}

function playGcdGame()
{
    $description = "Find the greatest common divisor of given numbers.";
    runGame(function () {
        return generateRoundData();
    }, $description);
}
