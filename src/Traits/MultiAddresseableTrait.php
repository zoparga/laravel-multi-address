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

    public function getLatestMultiAddresses()
    {
        return $this->morphMany(MultiAddress::class, 'multiaddresseable')->orderBy('id', 'desc');
    }


    public function getLastMultiAddress()
    {
        return $this->morphMany(MultiAddress::class, 'multiaddresseable')->orderBy('id', 'desc')->first();
    }

    /**
     * @param $data
     * @param $author
     * @param $parent
     *
     * @return mixed
     */
    public function createMultiAddress($data)
    {
        return (new MultiAddress())->createMultiAddress($this, $data);
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
