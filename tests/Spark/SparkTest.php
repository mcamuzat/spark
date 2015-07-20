<?php
namespace Spark;

use Spark\Spark;

class SparkTest extends \PHPUnit_Framework_TestCase
{
    public function testItCreateAStringFromData()
    {
        $out = Spark::spark(array(1,5,22,13,5));
        $this->assertEquals('▁▃█▅▃', $out);

    }

    public function testItDontCareifInputIsString()
    {
        $out = Spark::spark(array("2","4","8"));
        $this->assertEquals('▃▅█', $out);

    }
    public function testItWorkWithFloatNumber()
    {
        $out = Spark::spark(array("0.2","0.8","0.4"));
        $this->assertEquals('▃█▅', $out);

    }

    public function testItNotDivideBy0()
    {
        $out = Spark::spark(array(0,0,0));
        $this->assertEquals('▁▁▁', $out);

    }
}
