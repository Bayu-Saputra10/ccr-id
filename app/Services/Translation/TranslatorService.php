<?php

namespace App\Services\Translation;

use App\Services\Translation\Providers\JsonProvider;

class TranslatorService
{
    protected $provider;

    public function __construct()
    {
        $provider = config('translator.provider');

        switch ($provider) {

            case 'json':
            default:
                $this->provider = new JsonProvider();
                break;

        }
    }

    public function translate(string $text): string
    {
        return $this->provider->translate($text);
    }
}