<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('UK postcodes', '1.0.0');

$application->add(new \Application\Command\PostCodeCommand());

try {
    $application->run();
} catch (\Exception $e) {
    exit($e->getMessage());
}
