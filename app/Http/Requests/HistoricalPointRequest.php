<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\HistoricalPointType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HistoricalPointRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
             'title' => 'required|min:5',
             'place' => 'required|min:5',
             'years' => 'required|min:5',
             'info' => 'required|min:5',
             'type' => Rule::in(HistoricalPointType::casesAsArray()),
        ];
    }
}
