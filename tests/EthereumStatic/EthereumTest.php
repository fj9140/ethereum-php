<?php
declare(strict_types=1);
namespace Ethereum;

use PHPUnit\Framework\TestCase;

final class EthereumTest extends TestCase{
    public function testSimple(){
        $ethereum=new Ethereum();
        $this->assertEquals(true,true);
    }
}
