<?php

namespace app\specification;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    protected $fillable = ['name', 'type'];

    public function type(): string
    {
        return $this->type;
    }

}
