<?php

namespace App\Models\Interface;

interface UrlRepositoryInterface
{
    public function all();
    public function create(string $originalUrl, string $shortUrl);

    public function findByShortUrl(string $shortUrl);
}
