<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Personal;

/**
 * @see Personal
 */
class PersonalRepository
{
    public function findLast(): ?Personal
    {
        return Personal::query()
            ->get()
            ->last();
    }
}
