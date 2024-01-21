<?php

namespace App\GameSolid;
use GuzzleHttp\Client as GuzzleClient;

class ParseApi implements ParseApiInterface
{
    private string $url = 'https://nominatim.openstreetmap.org/search.php?format=jsonv2&q=';

    public function searchPlaces(string $query, array $excludePlaceIds): array
    {
        $guzzleClient = new GuzzleClient();
        $response = $guzzleClient->request('GET', $this->url . urlencode($query) . '&exclude_place_ids=' . urlencode(implode(',', $excludePlaceIds)));
        return json_decode($response->getBody()->getContents());
    }
}
