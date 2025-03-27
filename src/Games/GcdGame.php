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

function playGcdGame()
{
    $description = "Find the greatest common divisor of given numbers.";
    $generateGameData = function () {
        $roundData = [];
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $correctAnswer = gcd($num1, $num2);
        $question = "{$num1} {$num2}";

        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };

    runGame($generateGameData, $description);
}
