<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\LangEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonalRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|min:5|max:255',
            'speciality' => 'required|min:5|max:255',
            'info' => 'required|min:5|max:1024',
            'cv_url' => 'required|active_url',
            'cv_label' => 'required|min:5|max:255',
            'lang' => Rule::in(LangEnum::casesAsArray()),
        ];
    }
}
