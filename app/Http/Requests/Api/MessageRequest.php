<?php

declare(strict_types=1);

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:256',
            'email' => 'required|email|max:256',
            'subject' => 'required|max:1024',
            'message' => 'required',
        ];
    }
}
