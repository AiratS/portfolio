<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Quality;
use Illuminate\Database\Eloquent\Collection;

/**
 * @see Quality
 */
class QualityRepository
{
    /**
     * @return Collection<Quality>
     */
    public function fetchQualityNamesAndValues(): Collection
    {
        return Quality::query()
            ->select(['name', 'value'])
            ->orderBy('name')
            ->get();
    }
}
