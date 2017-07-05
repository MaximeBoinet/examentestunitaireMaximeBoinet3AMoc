<?php
namespace test\lib;

use lib\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase {
    private $stringun;
    private $stringdeux;
    private $stringFormatter;

    public function setUp() {
        $this->stringFormatter = new StringFormatter();
        $this->stringun = "unTe st";
        $this->stringdeux = "deuxTest";
    }

    public function testConcat() {
        $this->assertEquals("unTe stdeuxTest",
            $this->stringFormatter->concat($this->stringun, $this->stringdeux));
    }

    public function testToCamelCase() {
        $this->assertEquals("UnteStDeuxtest",
            $this->stringFormatter->toCamelCase($this->stringun, $this->stringdeux));
    }

    public function testSuffix() {
        $this->assertEquals("UnteStDeuxtest",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, true));
        $this->assertEquals("unTe stdeuxTest",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, false));
    }

    public function testPrefix() {
        $this->assertEquals("DeuxtestUnteSt",
            $this->stringFormatter->prefix($this->stringun, $this->stringdeux, true));
        $this->assertEquals("deuxTestunTe st",
            $this->stringFormatter->prefix($this->stringun, $this->stringdeux, false));
    }
}
 ?>
