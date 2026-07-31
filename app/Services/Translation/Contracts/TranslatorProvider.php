<?php

namespace App\Services\Translation\Contracts;

interface TranslatorProvider
{
    /**
     * Translate text.
     */
    public function translate(
        string $text,
        ?string $locale = null
    ): string;
}