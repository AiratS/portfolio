<?php

declare(strict_types=1);

namespace App\Services;

class ImagePathResolver
{
    public function resolve(string $storagePath): string
    {
        return url('storage/'.$storagePath);
    }
}
