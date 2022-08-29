<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\ImageType;
use App\Models\Image;

/**
 * @see Image
 */
class ImageRepository
{
    /**
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function findFirstImageByType(ImageType $type): ?Image
    {
        return Image::query()
            ->where(['type' => $type->value])
            ->first();
    }
}
