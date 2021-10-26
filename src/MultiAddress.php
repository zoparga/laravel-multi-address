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
        'multiaddresseable_id',
        'multiaddresseable_type',
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

    public function createMultiAddress(Model $addresseable, $data, Model $model)
    {
        $rating = new static();
        $rating->fill(array_merge($data, [
            'multiaddresseable_id' => $model->id,
            'multiaddresseable_type' => get_class($model),
        ]));

        $addresseable->multiaddresses()->save($rating);

        return $rating;
    }

    /**
     * @param $id
     * @param $data
     *
     * @return mixed
     */
    public function updateMultiAddress($id, $data)
    {
        $rating = static::find($id);
        $rating->update($data);

        return $rating;
    }
}
