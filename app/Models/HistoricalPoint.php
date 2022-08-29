<?php

declare(strict_types=1);

namespace App\Models;

use App\Repositories\HistoricalPointRepository;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $title
 * @property string $place
 * @property string $years
 * @property string $info
 * @property string $type
 *
 * @see HistoricalPointRepository
 */
class HistoricalPoint extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'place',
        'years',
        'info',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /** @var string[] */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'type',
    ];
}
