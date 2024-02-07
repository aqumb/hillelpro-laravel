<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use App\Models\Interface\UrlRepositoryInterface;
class UrlController extends Controller
{
    private $urlRepository;
    public function __construct(UrlRepositoryInterface $urlRepository)
    {
        $this->urlRepository = $urlRepository;
    }

    public function allUrl()
    {
        $urls = $this->urlRepository->all();

        return view('index', ['urls' => $urls]);
    }

    public function shortenUrl(Request $request)
    {
        try {
            $request->validate([
                'url' => 'required|string',
            ]);

            $originalUrl = $request->input('url');
            $shortUrl = $this->generateShortUrl(8);

            $this->urlRepository->create([
                'original_url' => $originalUrl,
                'short_url' => $shortUrl,
            ]);

            return view('show', ['originalUrl' => $originalUrl, 'shortUrl' => route('redirectToOriginalUrl', $shortUrl)]);
        } catch (\Exception $e) {
            return response()->view('errors.500', [], 500);
        }
    }

    public function redirectToOriginalUrl($shortUrl)
    {
        try {
            $url = $this->urlRepository->findByShortUrl($shortUrl);
            return redirect($url->original_url);
        } catch (\Exception $e) {
            return response()->view('errors.404', [], 404);
        }
    }

    private function generateShortUrl($len): string
    {
        return substr(preg_replace('/[+=]+/', '',  base64_encode(md5(time()))), $len * (-1));
    }
}
