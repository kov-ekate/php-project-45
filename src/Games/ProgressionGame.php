<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\runGame;

function generateRandProgression()
{
    $coll = [];
    $start = rand(0, 20);
    $step = rand(0, 10);
    $index = 0;
    $progression = [];
    $progression[] = $start;

    while ($index < 10) {
        $progression[] = $progression[$index] + $step;
        $index++;
    }
    return $progression;
}

function playProgressionGame()
{
    $description = "What number is missing in the progression?";
    $gameData = function () {
        $progression = generateRandProgression();
        $pass = array_rand($progression);
        $correctAnswer = "$progression[$pass]";
        $progression[$pass] = '..';
        $question = implode(' ', $progression);

        $roundData[] = $question;
        $roundData[] = $correctAnswer;

        return $roundData;
    };
    runGame($gameData, $description);
}
