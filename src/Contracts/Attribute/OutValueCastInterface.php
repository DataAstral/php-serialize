<?php

namespace Astral\Serialize\Contracts\Attribute;

use Astral\Serialize\Support\Context\OutContext;
use Astral\Serialize\Support\Context\InputValueContext;
use Astral\Serialize\Support\Collections\DataCollection;

interface OutValueCastInterface
{
    public function match(mixed $value, DataCollection $collection, OutContext $context): bool;

    public function resolve(mixed $value, DataCollection $collection, OutContext $context): mixed;
}
