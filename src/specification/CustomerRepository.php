<?php

namespace app\specification;

class CustomerRepository
{
    public function matchingSpecification($specification): \Illuminate\Database\Eloquent\Collection
    {
        $customers = Customer::query();

        $customers = $specification->asScope($customers);

        return $customers->get();
    }

    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Customer::all();
    }
}
