<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\LangEnum;

trait EnumTrait
{
    public static function casesAsArray(): array
    {
        return array_map(function (LangEnum $case): mixed {
            return $case->value;
        }, self::cases());
    }

    /**
     * @return array<mixed, string>
     */
    abstract public static function caseLabels(): array;
}
