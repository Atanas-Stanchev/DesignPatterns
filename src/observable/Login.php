<?php

namespace app\observable;

use app\observable\interfaces\Observer;
use app\observable\interfaces\Subject;

class Login implements Subject
{
    protected array $observers = [];

    public function attach($observable): static
    {
        if (is_array($observable)) {
            $this->attachObservers($observable);
        }
        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index): void
    {
        unset($this->observers[$index]);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof Observer) {
                $observer->handle();
            }
        }
    }

    /**
     * @param array|Observer $observable
     *
     * @return void
     */
    private function attachObservers(array|Observer $observable): void
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer) {
                throw new \RuntimeException;
            }
            $this->attach($observer);
        }
    }

    public function fire(): void
    {
        $this->notify();
    }
}
