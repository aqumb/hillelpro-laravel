<?php

namespace App\Models\Interface;

interface UrlRepositoryInterface
{
    public function all();
    public function create(array $data);

    public function findByShortUrl(string $shortUrl);
}
