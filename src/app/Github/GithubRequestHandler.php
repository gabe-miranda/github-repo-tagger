<?php

namespace App\Github;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GithubRequestHandler {

    private const API_URL = 'https://api.github.com/search/repositories';

    public static function getResponseData(Request $request): array {
        $request_params = self::processRequestParams($request->all());
        $response_json = self::makeRequest($request_params);
        return self::parseResponse($response_json);
    }

    private static function processRequestParams(array $request_params): array {
        $request_params['q'] = str_replace(',', '+', $request_params['q']);
        if (isset($request_params['language'])) {
            $request_params['q'] = "{$request_params['q']}+language:{$request_params['language']}";
        }

        return $request_params;
    }

    private static function makeRequest(array $request_params): string {
        $client = new Client();
        $response = $client->request('GET', self::API_URL, [
            'headers' => ['Accept' => 'application/vnd.github.v3+json'],
            'query' => [
                'q' => $request_params['q'],
                'sort' => $request_params['sort'],
                'order' => $request_params['order'],
            ],
        ]);

        return $response->getBody()->getContents();
    }

    private static function parseResponse(string $response_json): array {
        $parsed_response = [];
        $repositories_data = \GuzzleHttp\json_decode($response_json);

        foreach ($repositories_data->items as $repository) {
            $parsed_response[] = (object) [
                'name' => $repository->name,
                'full_name' => $repository->full_name,
                'stars' => $repository->stargazers_count,
                'description' => $repository->description,
                'language' => $repository->language,
                'created_at' => date('d/m/Y', strtotime($repository->created_at)),
            ];
        }

        return $parsed_response;
    }
}
