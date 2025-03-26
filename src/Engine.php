<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(callable $gameData, string $description): void
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    $numCorrectAnswers = 3;

    for ($i = 0; $i < $numCorrectAnswers; $i++) {
        $roundData = $gameData();
        line("Question: %s", $roundData[0]);
        $answer = prompt('Your answer');
        $correctAnswer = $roundData[1];
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'\nLet's try again, $name!");
            return;
        }
    }

    line("Congratulations, $name!");
}
