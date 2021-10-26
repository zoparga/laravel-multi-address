<?php

namespace zoparga\MultiAddress\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use zoparga\MultiAddress\MultiAddress;

class ModelFactory extends Factory
{
    protected $model = MultiAddress::class;


    public function definition()
    {
        return [
            'multiaddresseable_id' => 1,
            'multiaddresseable_type' => 'App\Models\User',
            'country' => 'TEST',
            'county' => 'TEST',
            'zip' => 'TEST',
            'city' => 'TEST',
            'street' => 'TEST',
            'address_longitude' => 'TEST',
            'address_latitude' => 'TEST',
        ];
    }
}
