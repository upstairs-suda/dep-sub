<?php

namespace Depsub\Models\Store;

interface IStoreRepository
{
    public function fetchAll(): array;
}
