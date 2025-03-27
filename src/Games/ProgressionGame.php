<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\runGame;

function generateRandProgression(int $start, int $step, int $elementsInProgressionCount)
{
    $progression = [];
    $progression[] = $start;

    for ($i = 0; $i < $elementsInProgressionCount; $i++) {
        $progression[] = $progression[$i] + $step;
    }
    return $progression;
}

function playProgressionGame()
{
    $description = "What number is missing in the progression?";
    $generateGameData = function () {
        $start = rand(0, 20);
        $step = rand(0, 10);
        $elementsInProgressionCount = 10;
        $progression = generateRandProgression($start, $step, $elementsInProgressionCount);
        $missingNumber = array_rand($progression);
        $correctAnswer = "$progression[$missingNumber]";
        $progression[$missingNumber] = '..';
        $question = implode(' ', $progression);

        $roundData = [];
        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };
    runGame($generateGameData, $description);
}
