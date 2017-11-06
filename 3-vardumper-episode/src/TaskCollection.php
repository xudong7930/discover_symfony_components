<?php

namespace Acme;


class TaskCollection {
    private $tasks;

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }
}
