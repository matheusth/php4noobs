<?php

function greetings(string $name, bool $welcome = false)
{
    if ($welcome) {
        echo 'Hello ' . $name;
    } else {
        echo 'Get the fuck out of here ' . $name;
    }

}

greetings('DanielHe4rt', true);
