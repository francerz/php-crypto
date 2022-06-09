<?php

namespace Francerz\Crypto\Tests;

use Francerz\Crypto\RandomString;
use PHPUnit\Framework\TestCase;

class RandomStringTest extends TestCase
{
    public function testGenerate()
    {
        $random = RandomString::generate(1);
        $this->assertEquals(1, strlen($random));

        $random = RandomString::generate(2);
        $this->assertEquals(2, strlen($random));

        $random = RandomString::generate(3);
        $this->assertEquals(3, strlen($random));

        $random = RandomString::generate(4);
        $this->assertEquals(4, strlen($random));

        $random = RandomString::generate(10);
        $this->assertEquals(10, strlen($random));

        $random = RandomString::generate(16);
        $this->assertEquals(16, strlen($random));
    }

    public function testGenerateHex()
    {
        $random = RandomString::generateHex(1);
        $this->assertEquals(1, strlen($random));

        $random = RandomString::generateHex(2);
        $this->assertEquals(2, strlen($random));

        $random = RandomString::generateHex(3);
        $this->assertEquals(3, strlen($random));

        $random = RandomString::generateHex(4);
        $this->assertEquals(4, strlen($random));

        $random = RandomString::generateHex(10);
        $this->assertEquals(10, strlen($random));

        $random = RandomString::generateHex(16);
        $this->assertEquals(16, strlen($random));
    }

    public function testGenerateBase64()
    {
        $random = RandomString::generateBase64(1);
        $this->assertEquals(1, strlen($random));

        $random = RandomString::generateBase64(2);
        $this->assertEquals(2, strlen($random));

        $random = RandomString::generateBase64(3);
        $this->assertEquals(3, strlen($random));

        $random = RandomString::generateBase64(4);
        $this->assertEquals(4, strlen($random));

        $random = RandomString::generateBase64(10);
        $this->assertEquals(10, strlen($random));

        $random = RandomString::generateBase64(16);
        $this->assertEquals(16, strlen($random));
    }

    public function testGenerateUrlSafe()
    {
        $random = RandomString::generateUrlSafe(1);
        $this->assertEquals(1, strlen($random));

        $random = RandomString::generateUrlSafe(2);
        $this->assertEquals(2, strlen($random));

        $random = RandomString::generateUrlSafe(3);
        $this->assertEquals(3, strlen($random));

        $random = RandomString::generateUrlSafe(4);
        $this->assertEquals(4, strlen($random));

        $random = RandomString::generateUrlSafe(10);
        $this->assertEquals(10, strlen($random));

        $random = RandomString::generateUrlSafe(16);
        $this->assertEquals(16, strlen($random));
    }
}
