<?php

declare(strict_types=1);

/**
 * This file is part of Ethereum library for PHP.
 *
 * (c) fj9140 <fj9140@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Ethereum;

use Graze\GuzzleHttp\JsonRpc\Client as RpcClient;

final class Ethereum
{
    public $client;

    public function __construct(string $url = 'http://localhost:8545', array $config = [])
    {
        $this->client = RpcClient::factory($url, array_merge([
            'debug' => false,
            'rpc_error' => true,
        ], $config));
    }
}
