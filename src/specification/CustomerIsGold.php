<?php

namespace app\specification;

class CustomerIsGold implements CustomerSpecification
{
    public function isSatisfiedBy(Customer $customer): bool
    {
        return $customer->type() === 'gold';
    }

    public function asScope($query)
    {
        return $query->where('type', 'gold');
    }
}
