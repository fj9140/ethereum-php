<?php

namespace Ethereum;

use kornrunner\Keccak;

abstract class EthereumStatic{
    public static function sha3(string $string):string{
        return self::phpKeccak256($string);
    }

    public static function hasPrefix($str){
        return substr($str,0,2)==='0x';
    }

    public static function ensureHexPrefix(string $str):string{
        if(self::hasPrefix($str)){
            return $str;
        }
        return '0x'.$str;
    }

    public static function phpKeccak256(string $str):string{
        return self::ensureHexPrefix(Keccak::hash($str,256));
    }

    public static function getDefinition(){
        return json_decode(file_get_contents(__DIR__."/../resources/ethjs-schema.json"));
    }

    
}
