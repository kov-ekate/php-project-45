<?php

namespace BrainGames\Games\CalcGame;

use function BrainGames\Engine\runGame;

function generateRandExpression()
{
    $operators = ['+', '-', '*'];
    $randKey = array_rand($operators);
    $operator = $operators[$randKey];

    $num1 = rand(0, 100);
    $num2 = rand(0, 100);

    $randExpression = "$num1 $operator $num2";
    $correctAnswer = calculateExpression($num1, $num2, $operator);

    $randData = [];
    $randData[] = $randExpression;
    $randData[] = $correctAnswer;

    return $randData;
}

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

function generateRoundData()
{
    $roundData = [];
    $data = generateRandExpression();
    $question = $data[0];
    $correctAnswer = $data[1];
    $roundData[] = $question;
    $roundData[] = $correctAnswer;

    return $roundData;
}

function playCalcGame()
{
    $description = "What is the result of the expression?";
    runGame(function () {
        return generateRoundData();
    }, $description);
}
