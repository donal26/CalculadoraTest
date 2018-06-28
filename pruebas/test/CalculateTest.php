<?php

use PHPUnit\Framework\TestCase;

final class CalculateTest extends TestCase{
    
   

    public function testDivide():void{
         include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->divide(10,2),5);
    }


    public function testDivide1():void{
        include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->divide(50,10),0);
    }



    public function testIgv():void{
        include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->igv(100,18),18);
    }

    public function testIgv2():void{
        include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->igvS(1000,18),180);
    }


    public function testIgv3():void{
        include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->igv(100,19),19);
    }

    public function testIgv4():void{
        include_once "src/calculate.php";
        $calculate=new Calculate();
        $this->assertEquals(  $calculate->igvS(1000,19),190);
    }
}


?>