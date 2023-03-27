<?php

namespace specification;

use app\specification\Customer;
use app\specification\CustomerIsGold;
use app\specification\CustomerRepository;
use PHPUnit\Framework\TestCase;

class CustomerRepositoryTest extends TestCase
{
    /** @test */
    public function is_fetch_all_customers_who_match_a_given_sec(): void
    {
        $customer = new CustomerRepository(
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold'),
        );

        $result = $customer->bySpecification(new CustomerIsGold);

        $this->assertCount(2, $result);
    }
}
