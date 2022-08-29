<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumTrait;

enum HistoricalPointType: string
{
    use EnumTrait;

    case EDUCATION = 'education';
    case EXPERIENCE = 'experience';

    /**
     * @return array<>
     */
    public static function caseLabels(): array
    {
        return [
            self::EDUCATION->value => 'Образование',
            self::EXPERIENCE->value => 'Опыт работы',
        ];
    }
}
