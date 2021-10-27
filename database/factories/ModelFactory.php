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
            'type' => 'main address',
            'country' => 'Hungary',
            'zip' => '1010',
            'city' => 'Budapest',
            'street' => 'Fő utca 1.',
            'address_longitude' => '40.0000',
            'address_latitude' => '40.0000',
        ];
    }
}
