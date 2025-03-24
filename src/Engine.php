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
        print_r("Question: $roundData[0]\n");
        $answer = prompt('Your answer');
        if ($answer == $roundData[1]) {
            print_r("Correct!\n");
            $answers[] = $answer;
        } else {
            print_r("'$answer' is wrong answer ;(. Correct answer was '$roundData[1]'\n");
            print_r("Let's try again, $name\n");
            break;
        }
    }
    if (count($answers) === 3) {
        print_r("Congratulations, $name!\n");
    }
}