<?php

namespace App\UrlGenerator;

interface ShortUrlGeneratorInterface
{
    public function generateShortUrl($len): string;
}
