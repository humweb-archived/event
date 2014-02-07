<?php namespace Humweb\Event;

use Illuminate\Events\Dispatcher;
use Event;

class Subscriber {

    protected $listeners = [];

    function __construct()
    {
        $this->className = get_class($this);
    }

    public static function make()
    {
        return new static();
    }

    public static function register()
    {
        $subscriber = new static();
        Event::subscribe($subscriber);
        return $subscriber;
    }

    /**
     * Register listeners
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe(Dispatcher $events)
    {
        foreach ($this->listeners as $name => $handler)
        {
            $events->listen($name, $this->className.'@'.$handler);
        }
    }

}