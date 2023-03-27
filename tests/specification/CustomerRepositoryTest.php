<?php

namespace specification;

use app\specification\Customer;
use app\specification\CustomerIsGold;
use app\specification\CustomerRepository;
use PHPUnit\Framework\TestCase;

use Illuminate\Database\Capsule\Manager as DB;

class CustomerRepositoryTest extends TestCase
{
    protected CustomerRepository $customers;
    public function setUp(): void
    {
        $this->setupDatabase();
        $this->migrateTable();

        $this->customers = new CustomerRepository;
    }

    /** @test */
    public function it_fetches_all_customers(): void
    {
        $result = $this->customers->all();

        $this->assertCount(4, $result);
    }

    /** @test */
    public function is_fetch_all_customers_who_match_a_given_sec(): void
    {
        $result = $this->customers->matchingSpecification(new CustomerIsGold);

        $this->assertCount(2, $result);
    }
    private function migrateTable(): void
    {
        DB::schema()->create('customers', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name' => 'Joe', 'type' => 'gold']);
        Customer::create(['name' => 'Jane', 'type' => 'silver']);
        Customer::create(['name' => 'Jude', 'type' => 'gold']);
        Customer::create(['name' => 'Peter', 'type' => 'silver']);

    }

    private function setupDatabase(): void
    {
        $database = new DB();

        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);

        $database->bootEloquent();
        $database->setAsGlobal();
    }
}
