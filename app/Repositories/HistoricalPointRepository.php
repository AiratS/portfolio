<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\HistoricalPointType;
use App\Models\HistoricalPoint;
use Illuminate\Database\Eloquent\Collection;

/**
 * @see HistoricalPoint
 */
class HistoricalPointRepository
{
    /**
     * @return Collection<HistoricalPoint>
     */
    public function fetchByType(HistoricalPointType $type): Collection
    {
        return HistoricalPoint::query()->where([
            'type' => $type->value,
        ])->get();
    }
}
