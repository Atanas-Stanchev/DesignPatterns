<?php

namespace app\specification;

class CustomerIsGold implements CustomerSpecification
{
    public function isSatisfiedBy(Customer $customer): bool
    {
        return $customer->type() === 'gold';
    }
}
