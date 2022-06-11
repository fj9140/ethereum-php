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

use kornrunner\Keccak;

abstract class EthereumStatic
{
    final public static function sha3(string $string): string
    {
        return self::phpKeccak256($string);
    }

    final public static function hasPrefix($str)
    {
        return substr($str, 0, 2) === '0x';
    }

    final public static function ensureHexPrefix(string $str): string
    {
        if (self::hasPrefix($str)) {
            return $str;
        }

        return '0x' . $str;
    }

    final public static function phpKeccak256(string $str): string
    {
        return self::ensureHexPrefix(Keccak::hash($str, 256));
    }

    final public static function getDefinition()
    {
        return json_decode(file_get_contents(__DIR__ . '/../resources/ethjs-schema.json'));
    }
}
