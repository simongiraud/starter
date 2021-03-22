<?php

namespace App\Http\Requests\LibraryMedia;

use App\Models\LibraryMedia\LibraryMediaCategory;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return localizeRules([
            'name' => [
                'required',
                'string',
                'max:255',
                UniqueTranslationRule::for(LibraryMediaCategory::class)->ignore($this->category),
            ],
        ]);
    }
}
