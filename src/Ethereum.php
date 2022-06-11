<?php
namespace Ethereum;

use Graze\GuzzleHttp\JsonRpc\Client as RpcClient;

class Ethereum{
    public $client;
    private $definition;

    public function __construct(string $url="http://localhost:8545",array $config=[]){
        $this->client=RpcClient::factory($url,array_merge([
            'debug'=>false,
            'rpc_error'=>true
        ],$config));
    }
}
