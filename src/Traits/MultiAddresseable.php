<?php

namespace zoparga\MultiAddress\Traits;

use zoparga\MultiAddress\MultiAddress;

trait MultiAddresseable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function multiaddresses()
    {
        return $this->morphMany(MultiAddress::class, 'multiaddresseable');
    }
}
