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
    $correctAnswersCount = 3;

    for ($i = 0; $i < $correctAnswersCount; $i++) {
        $roundData = $gameData();
        $question = $roundData[0];
        $correctAnswer = $roundData[1];
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer != $correctAnswer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'\nLet's try again, $name!");
            return;
        }
        line("Correct!");
    }

    line("Congratulations, $name!");
}
