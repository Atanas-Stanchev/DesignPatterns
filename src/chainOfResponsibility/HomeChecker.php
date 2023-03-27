<?php

namespace app\chainOfResponsibility;

abstract class HomeChecker
{
    // The IDE wants to describe declaration but is not correct
    // because if we place HomeChecker there is an error 'must not be accessed before initialization'
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function setSuccessor(HomeChecker $successor): void
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home): void
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }


}
