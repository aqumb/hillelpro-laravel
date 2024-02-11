<?php

namespace App\UrlGenerator;

interface UrlServiceInterface
{
    public function shortenUrl(string $originalUrl): string;
    public function getAllUrls();
}
