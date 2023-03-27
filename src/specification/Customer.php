<?php

namespace app\specification;

class Customer
{
    protected string $type;

    public function __construct($plan)
    {
        $this->type = $plan;
    }

    public function type(): string
    {
        return $this->type;
    }
}
