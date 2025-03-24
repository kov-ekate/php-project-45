<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function isEven($num)
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function playEvenGame()
{
    line("./bin/brain-games");
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    print_r("Answer \"yes\" if the number is even, otherwise answer \"no\".\n");
    $answers = [];
    while (count($answers) < 3) {
        $num = rand(0, 100);
        $value = isEven($num);
        print_r("Question: $num\n");
        $answer = prompt('Your answer');
        if ($answer === $value) {
            print_r("Correct!\n");
            $answers[] = $answer;
        } else {
            print_r("'$answer' is wrong answer ;(. Correct answer was '$value'\n");
            print_r("Let's try again, $name\n");
            break;
        }
    }
    if (count($answers)  === 3) {
        print_r("Congratulations, $name!\n");
    }
}
