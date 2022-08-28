<?php

declare(strict_types=1);

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * @property int    $id
 * @property string $name
 * @property string $type
 */
class Image extends Model
{
    use CrudTrait;
    use HasFactory;

    public const UPLOAD_DISK = 'public';
    public const UPLOAD_FOLDER = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function setNameAttribute(UploadedFile $value)
    {
        $this->uploadFileToDisk(
            $value,
            'name',
            self::UPLOAD_DISK,
            self::UPLOAD_FOLDER
        );
    }

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function (Image $image): void {
            Storage::disk(self::UPLOAD_DISK)->delete($image->name);
        });
    }
}
