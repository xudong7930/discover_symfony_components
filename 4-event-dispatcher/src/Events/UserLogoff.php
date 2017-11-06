<?

namespace Acme\Events;

use Symfony\Component\EventDispatcher\Event;

class UserLogoff extends Event {
    private $user;

    public function __construct($user)
    {
        
        $this->user = $user;
    }
}
