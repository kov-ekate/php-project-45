<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\runGame;

function generateProgression(int $start, int $step, int $elementsInProgressionCount)
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
        $progressionLenght = 10;
        $progression = generateProgression($start, $step, $progressionLenght);
        $missingNumberIndex = array_rand($progression);
        $correctAnswer = "$progression[$missingNumberIndex]";
        $progression[$missingNumberIndex] = '..';
        $question = implode(' ', $progression);

        $roundData = [];
        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };
    runGame($generateGameData, $description);
}
