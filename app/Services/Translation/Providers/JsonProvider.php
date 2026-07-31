<?php

namespace App\Services\Translation\Providers;

use App\Services\Translation\Contracts\TranslatorProvider;

class JsonProvider implements TranslatorProvider
{
    public function translate(
        string $text,
        ?string $locale = null
    ): string {

        $locale = $locale ?? app()->getLocale();

        return __($text, [], $locale);

    }
}