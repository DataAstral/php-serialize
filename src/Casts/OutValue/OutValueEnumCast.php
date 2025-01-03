<?php

declare(strict_types=1);

namespace Astral\Serialize\Casts\OutValue;

use UnitEnum;
use Astral\Serialize\Support\Context\OutContext;
use Astral\Serialize\Support\Collections\DataCollection;
use Astral\Serialize\Contracts\Attribute\OutValueCastInterface;

class OutValueEnumCast implements OutValueCastInterface
{

    public function match($value, DataCollection $collection, OutContext $context): bool
    {
        return $value instanceof UnitEnum;
    }
    public function resolve(mixed $value, DataCollection $collection, OutContext $context): string
    {
        return $value->name;
    }
}
