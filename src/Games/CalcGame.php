<?php

namespace BrainGames\Games\CalcGame;

use function BrainGames\Engine\runGame;

function calculateExpression(int $num1, int $num2, mixed $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            return null;
    }
}

function playCalcGame()
{
    $description = "What is the result of the expression?";
    $generateGameData = function () {
        $operators = ['+', '-', '*'];
        $randKey = array_rand($operators);
        $operator = $operators[$randKey];

        $num1 = rand(0, 100);
        $num2 = rand(0, 100);

        $randExpression = "$num1 $operator $num2";
        $correctAnswer = calculateExpression($num1, $num2, $operator);

        $roundData = [];
        $roundData[] = $randExpression;
        $roundData[] = $correctAnswer;

        return $roundData;
    };
    runGame($generateGameData, $description);
}
