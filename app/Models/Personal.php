<?php

declare(strict_types=1);

namespace App\Models;

use App\Repositories\PersonalRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $full_name
 * @property string $info
 * @property string $cv_url
 * @property string $cv_label
 * @property string $cv_lang
 *
 * @see PersonalRepository
 */
class Personal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
