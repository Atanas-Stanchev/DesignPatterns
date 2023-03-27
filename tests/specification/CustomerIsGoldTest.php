<?php

namespace specification;

use app\specification\Customer;
use app\specification\CustomerIsGold;
use PHPUnit\Framework\TestCase;

class CustomerIsGoldTest extends TestCase
{
    /** @test */
    public function is_customer_a_gold(): void
    {
        $specification = new CustomerIsGold;

        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}
