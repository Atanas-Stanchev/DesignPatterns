<?php

namespace app\specification;

interface CustomerSpecification
{
    public function isSatisfiedBy(Customer $customer);
}
