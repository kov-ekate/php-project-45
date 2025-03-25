<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function generateRandExpression()
{
    $operators = ['+', '-', '*'];
    $randKey = array_rand($operators);
    $randOperator = $operators[$randKey];
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $randExpression = "$num1 $randOperator $num2";
    return $randExpression;
}
function generateRoundData()
{
    $coll = [];
    $question = generateRandExpression();
    $correctAnswer = eval("return " . $question . ";");
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