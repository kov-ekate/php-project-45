<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(callable $generateRoundData, string $description): void
{
    line("./bin/brain-games");
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    $answers = [];
    while (count($answers) < 3) {
        $roundData = $generateRoundData();
        line("Question: %s", $roundData[0]);
        $answer = prompt('Your answer');
        if ($answer == $roundData[1]) {
            line("Correct!");
            $answers[] = $answer;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$roundData[1]'");
            line("Let's try again, $name!");
            break;
        }
    }
    if (count($answers) === 3) {
        line("Congratulations, $name!");
    }
}
