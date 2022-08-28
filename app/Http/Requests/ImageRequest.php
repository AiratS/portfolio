<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\ImageTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array>
     */
    public function rules(): array
    {
        return [
             'name' => [
                 'required',
                 'mimes:jpeg,png',
             ],
            'type' => [
                'nullable',
                Rule::in(ImageTypeEnum::casesAsArray()),
            ],
        ];
    }
}
