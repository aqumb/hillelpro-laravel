<?php

namespace App\UrlGenerator;



class ShortUrlGenerator implements ShortUrlGeneratorInterface
{
    public function generateShortUrl($len): string
    {
        return substr(preg_replace('/[+=]+/', '',  base64_encode(md5(time()))), $len * (-1));
    }
}
