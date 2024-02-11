<?php

namespace App\Models\Repository;

use App\Models\Interface\UrlRepositoryInterface;
use App\Models\Url;
class OrmUrlRepository implements UrlRepositoryInterface
{
    public function all()
    {
        return Url::all();
    }
    public function create(string $originalUrl, string $shortUrl)
    {
        return Url::create([
            'original_url' => $originalUrl,
            'short_url' => $shortUrl,
        ]);
    }

    public function findByShortUrl(string $shortUrl)
    {
        return Url::where('short_url', $shortUrl)->first();
    }
}
