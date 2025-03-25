<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;
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
    $roudData = [];
    $roudData[] = $randExpression;
    $roudData[] = $correctAnswer;
    return $roudData;
}

function calculateExpression($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
    }
}

function generateRoundData()
{
    $coll = [];
    $data = generateRandExpression();
    $question = $data[0];
    $correctAnswer = $data[1];
    $coll[] = $question;
    $coll[] = $correctAnswer;
    return $coll;
}

function playCalcGame()
{
    $description = "What is the result of the expression?";
    runGame(function () {
        return generateRoundData();
    }, $description);
}
