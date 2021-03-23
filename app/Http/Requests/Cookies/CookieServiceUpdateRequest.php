<?php

namespace App\Http\Requests\LibraryMedia;

use App\Models\Cookies\CookieService;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Foundation\Http\FormRequest;

class CookieServiceUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return localizeRules([
            'title' => [
                'required',
                'string',
                'max:255',
                UniqueTranslationRule::for(app(CookieService::class)->getTable())->ignore($this->cookieService->id),
            ],
        ]);
    }
}
