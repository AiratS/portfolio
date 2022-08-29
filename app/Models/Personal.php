<?php

declare(strict_types=1);

namespace App\Models;

use App\Repositories\PersonalRepository;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $full_name
 * @property string $speciality
 * @property string $info
 * @property string $cv_url
 * @property string $cv_label
 * @property string $lang
 *
 * @see PersonalRepository
 */
class Personal extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'full_name',
        'speciality',
        'info',
        'cv_url',
        'cv_label',
        'lang',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /** @var string[] */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
