<?php

namespace zoparga\MultiAddress\Traits;

use Illuminate\Database\Eloquent\Model;
use zoparga\MultiAddress\MultiAddress;

trait MultiAddresseableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function multiaddresses()
    {
        return $this->morphMany(MultiAddress::class, 'multiaddresseable');
    }

    /**
     * @param $data
     * @param $author
     * @param $parent
     *
     * @return mixed
     */
    public function createMultiAddress($data, Model $addresseable, Model $parent = null)
    {
        return (new MultiAddress())->createMultiAddress($this, $data, $addresseable);
    }

    /**
     * @param $id
     * @param $data
     * @param $parent
     *
     * @return mixed
     */
    public function updateMultiAddress($id, $data, Model $parent = null)
    {
        return (new MultiAddress())->updateMultiAddress($id, $data);
    }
}
