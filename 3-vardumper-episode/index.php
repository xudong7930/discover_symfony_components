<?php
require 'vendor/autoload.php';

use Acme\TaskCollection;
use Acme\Task;

$tasks = new TaskCollection([
    new Task('go to store'),
    new Task('finish screencast'),
    new Task('destroy some')
]);

// var_dump($tasks);
dump($tasks);
