<?php
require 'vendor/autoload.php';

use Acme\Events\UserDone;
use Acme\Events\UserLogoff;
use Acme\Events\UserSignedUp;
use Acme\Listeners\SendThankyouEmail;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher;

// example 1
$dispatcher->addListener('UserSignedUp', function (Event $event) {
    var_dump('user has signed up');
});
$dispatcher->dispatch('UserSignedUp');


// example 2
$dispatcher->addListener(UserLogoff::class, function (Event $event) {
    var_dump($event);
    var_dump("userlogoff event");
});

$event = new UserLogoff((object)['name'=>'sbjsw', 'email'=>'sbjsw@qq.com']);
$dispatcher->dispatch(UserLogoff::class, $event);


// example 3
$listener = new SendThankyouEmail;
$dispatcher->addListener(UserDone::class, [$listener, 'handle']);
$dispatcher->dispatch(UserDone::class);
