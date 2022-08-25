<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumTrait;

enum LangEnum: string
{
    use EnumTrait;

    case RU = 'ru';
    case EN = 'en';

    /**
     * @return array<string, string>
     */
    public static function caseLabels(): array
    {
        return [
            'ru' => 'Русский',
            'en' => 'Английский',
        ];
    }
}
