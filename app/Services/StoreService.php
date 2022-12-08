<?php

namespace Depsub\Services;

use Depsub\Models\Store\IStore;
use Nette\Utils\Strings;

class StoreService
{
    public function toDisplayName(IStore $store): string
    {
        $string = '{ ' . $store->getName() . ' / ' . $store->getAddress() . ' }';
        return Strings::padLeft($string, length: 3, pad: '^');
    }
}
