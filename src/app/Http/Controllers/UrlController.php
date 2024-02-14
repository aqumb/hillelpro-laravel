<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interface\UrlRepositoryInterface;
use App\UrlGenerator\UrlService;

class UrlController extends Controller
{
//    private $urlService;
//    private $urlRepository;
//    public function __construct(UrlService $urlService, UrlRepositoryInterface $urlRepository)
//    {
//        $this->urlService = $urlService;
//        $this->urlRepository = $urlRepository;
//    }
//
//    public function allUrl()
//    {
//        $urls = $this->urlService->getAllUrls();
//
//        return view('index', ['urls' => $urls]);
//    }
//
//    public function shortenUrl(Request $request)
//    {
//        try {
//            $request->validate([
//                'url' => 'required|string',
//            ]);
//
//            $originalUrl = $request->input('url');
//            $shortUrl = $this->urlService->shortenUrl($originalUrl);
//
//            return view('show', ['originalUrl' => $originalUrl, 'shortUrl' => route('redirectToOriginalUrl', $shortUrl)]);
//        } catch (\Exception $e) {
//            return response()->view('errors.500', [], 500);
//        }
//    }
//
//    public function redirectToOriginalUrl($shortUrl)
//    {
//        try {
//            $url = $this->urlRepository->findByShortUrl($shortUrl);
//            return redirect($url->original_url);
//        } catch (\Exception $e) {
//            return response()->view('errors.404', [], 404);
//        }
//    }
}
