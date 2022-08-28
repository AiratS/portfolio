<?php

declare(strict_types=1);

namespace App\Traits;

trait EnumTrait
{
    public static function casesAsArray(): array
    {
        return array_map(function ($case): mixed {
            return $case->value;
        }, self::cases());
    }

    /**
     * @throws \InvalidArgumentException
     */
    public static function caseLabel(mixed $case): mixed
    {
        $key = is_object($case) ? $case->value : $case;
        $caseLabels = static::caseLabels();

        if (!isset($caseLabels[$key])) {
            throw new \InvalidArgumentException(sprintf('Undefined case "%s".', $key));
        }

        return $caseLabels[$key];
    }

    /**
     * @return array<mixed, string>
     */
    abstract public static function caseLabels(): array;
}
