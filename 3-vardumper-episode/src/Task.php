<?php

namespace Acme;

class Task {
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }
}
