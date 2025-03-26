<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\runGame;

function isEven(int $num)
{
    return $num % 2 === 0;
        
}

function generateRoundData()
{
    $question = rand(0, 1000);
    if (isEven($question) === true) {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }

    $roundData[] = $question;
    $roundData[] = $correctAnswer;

    return $roundData;
}

function playEvenGame()
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $gameData = function () {
        $question = rand(0, 1000);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };
    runGame($gameData, $description);
}
