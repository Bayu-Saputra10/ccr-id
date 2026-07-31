<?php

use App\Services\Translation\TranslatorService;

if (! function_exists('t')) {

    function t(string $text): string
    {
        return app(TranslatorService::class)
            ->translate($text);
    }

}