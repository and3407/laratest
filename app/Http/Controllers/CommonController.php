<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use OpenSearch\ClientBuilder;

class CommonController extends Controller
{
    public function index(): string
    {
//        Redis::set('common', 'common value');
//
        dump(Redis::get('common'));
//
//        $client = (new ClientBuilder())
//            ->setHosts(['laratest_opensearch:9200'])
//            ->setBasicAuthentication('admin', 'admin') // For testing only. Don't store credentials in code.
//            ->setSSLVerification(false) // For testing only. Use certificate for validation
//            ->build();
//
//        $indexName = 'test-index-name';

//        $client->indices()->create([
//            'index' => $indexName,
//            'body' => [
//                'settings' => [
//                    'index' => [
//                        'number_of_shards' => 4
//                    ]
//                ]
//            ]
//        ]);

//        $client->create([
//            'index' => $indexName,
//            'id' => 1,
//            'body' => [
//                'title' => 'Moneyball',
//                'director' => 'Bennett Miller',
//                'year' => 2011
//            ]
//        ]);

//        dump(
//            $client->search([
//                'index' => $indexName,
//                'body' => [
//                    'size' => 5,
//                    'query' => [
//                        'multi_match' => [
//                            'query' => 'miller',
//                            'fields' => ['title^2', 'director']
//                        ]
//                    ]
//                ]
//            ])
//        );

        return 'Common controller';
    }

    public function ab(): string
    {
        return "success";
    }
}
