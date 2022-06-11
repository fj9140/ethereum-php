<?php
declare(strict_types=1);
namespace Ethereum;



use PHPUnit\Framework\TestCase;

final class Sha3StaticTest extends TestCase{

    public function testEnsureHexPrefix(){
        $this->assertEquals(EthereumStatic::ensureHexPrefix("0xfff"),'0xfff');
    }

    public function testSha3():void{

        foreach([
            ['1','0xc89efdaa54c0f20c7adf612882df0950f5a951637e0307cdcb4c672f298b8bc6'],
            ['','0xc5d2460186f7233c927e7db2dcc703c0e500b653ca82273b7bfad8045d85a470']
        ] as $d){
            $this->assertEquals($d[1],EthereumStatic::sha3($d[0]));
        }
    }
    
    public function testGetDefinition(){
        $this->assertEquals(EthereumStatic::getDefinition()->tags[0],"latest");
    }
}
