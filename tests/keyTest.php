<?php
use PHPUnit\Framework\TestCase;
require './src/key.php';
class keyTest extends TestCase{
    public function testSum(){
        $k = new key;
        $res = $k->sum(2,5);
        $this -> assertEquals(7,$res);
    }
}
?>