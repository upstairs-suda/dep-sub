<?php

namespace Depsub\Services;

use Depsub\Models\Store\IStore;

class StoreService
{
    public function toDisplayName(IStore $store): string
    {
        return $store->getName() . ' / ' . $store->getAddress();
    }
}
