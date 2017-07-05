<?php
namespace test\lib;

use lib\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase {
    private $stringun = "unTe st";
    private $stringdeux = "deuxTest";
    private $stringFormatter;

    public function setUp() {
        $this->stringFormatter = new StringFormatter();
    }

    public function testConcat() {
        $this->assertEquals("unTe stdeuxTest",
            $this->stringFormatter->concat($this->stringun, $this->stringdeux));
    }

    public function testToCamelCase() {
        $this->assertEquals("unteStDeuxtest",
            $this->stringFormatter->toCamelCase());
    }

    public function testSuffix() {
        $this->assertEquals("unteStDeuxtest",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, true));
        $this->assertEquals("unTe stdeuxTest",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, false));
    }

    public function testPrefixTrue() {
        $this->assertEquals("deuxtestUnteSt",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, true));
        $this->assertEquals("deuxTestunTe st",
            $this->stringFormatter->suffix($this->stringun, $this->stringdeux, false));
    }
}
 ?>
