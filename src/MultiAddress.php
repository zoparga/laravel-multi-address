<?php

namespace zoparga\MultiAddress;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MultiAddress extends Model
{
    use SoftDeletes;

    public $table = 'multi_address_table';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $fillable = [
        'transportaddresseable_id',
        'transportaddresseable_type',
        'country',
        'county',
        'zip',
        'city',
        'street',
        'address_longitude',
        'address_latitude',

    ];

    public function multiaddresseable()
    {
        return $this->morphTo();
    }
}
