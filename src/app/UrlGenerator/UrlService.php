<?php

namespace App\UrlGenerator;

use App\Models\Interface\UrlRepositoryInterface;

class UrlService implements UrlServiceInterface
{
    private $urlRepository;
    private $shortUrlGenerator;

    public function __construct(UrlRepositoryInterface $urlRepository, ShortUrlGeneratorInterface $shortUrlGenerator)
    {
        $this->urlRepository = $urlRepository;
        $this->shortUrlGenerator = $shortUrlGenerator;
    }

    public function shortenUrl(string $originalUrl): string
    {
        $shortUrl = $this->shortUrlGenerator->generateShortUrl(8);

        $existingUrl = $this->urlRepository->findByShortUrl($shortUrl);
        if ($existingUrl) {
            throw new \Exception('Short URL exists');
        }

        $this->urlRepository->create($originalUrl, $shortUrl);

        return $shortUrl;
    }

    public function getAllUrls()
    {
        return $this->urlRepository->all();
    }
}
