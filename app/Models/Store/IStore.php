<?php

namespace Depsub\Models\Store;

interface IStore
{
    public function getName(): string;

    public function getAddress(): string;
}
