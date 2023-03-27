<?php

namespace app\templateMethod;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSouces();
    }

    protected function layBread()
    {
        var_dump('laying down the bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add some lettuce');

        return $this;
    }

    protected function addSouces()
    {
        var_dump('add oil and vinegar lettuce');

        return $this;
    }

    abstract protected function addPrimaryToppings();
}
