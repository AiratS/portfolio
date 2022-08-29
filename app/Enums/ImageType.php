<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumTrait;

enum ImageType: string
{
    use EnumTrait;

    case MAIN = 'main';
    case ABOUT = 'about';

    /**
     * @return array<string, string>
     */
    public static function caseLabels(): array
    {
        return [
            self::MAIN->value => 'Главное',
            self::ABOUT->value => 'Обо мне',
        ];
    }
}
