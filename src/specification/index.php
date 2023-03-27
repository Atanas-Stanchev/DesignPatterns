<?php


use app\specification\Customer;
use app\specification\CustomerIsGold;

$spec = new CustomerIsGold;

$spec->isSatisfiedBy(new Customer('gold')); //
