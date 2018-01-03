<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Facades\App\Services\BreweryApiService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class BreweryController extends Controller
{
    public function getBreweries()
    {
        $params = [];

        if (!is_null(Input::get('established'))) {
            $params['established'] = Input::get('established');
        }

        if (!is_null(Input::get('ids'))) {
            $params['ids'] = Input::get('ids');
        }

        return json_encode(BreweryApiService::request('breweries', $params));
    }


    public function searchBreweries()
    {
        $lat = Input::get('lat');
        $lng = Input::get('lng');
        $radius = Input::get('radius') ?? 100;

        $result = BreweryApiService::request('search/geo/point', ['lat' => $lat, 'lng' => $lng, 'radius' => $radius]);
        $data = isset($result['data']) ?
            $this->extractData($result['data']) :
            [];

        return $data;
    }


    private function extractData($data)
    {
        $breweries = [];

        foreach ($data as $brewery) {
            try {
                $breweries[] = [
                    'name' => $brewery['brewery']['name'],
                    'website' => $brewery['brewery']['website'] ?? '',
                    'established' => $brewery['brewery']['established'] ?? '',
                    'image' => $brewery['brewery']['images']['medium'] ?? '',
                    'latitude' => $brewery['latitude'],
                    'longitude' => $brewery['longitude'],
                ];
            } catch (\Exception $e) {
                Log::info('exception: ' . $brewery['latitude'] . ', ' . $brewery['longitude']);
            }
        }

        return $breweries;
    }
}
