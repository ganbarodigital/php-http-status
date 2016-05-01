<?php

/**
 * Copyright (c) 2016-present Ganbaro Digital Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   HttpStatus/StatusValues
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2016-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://ganbarodigital.github.io/php-http-status
 */

namespace GanbaroDigitalTest\HttpStatus\StatusValues\RequestError;

use GanbaroDigital\HttpStatus\Interfaces\RequestErrorStatus;
use GanbaroDigital\HttpStatus\StatusValues\RequestError\ImATeapotStatus;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatus;

use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass GanbaroDigital\HttpStatus\StatusValues\RequestError\ImATeapotStatus
 */
class ImATeapotStatusTest extends PHPUnit_Framework_TestCase
{
    /**
     * @coversNothing
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test

        // ----------------------------------------------------------------
        // perform the change

        $unit = new ImATeapotStatus;

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(ImATeapotStatus::class, $unit);
    }

    /**
     * @coversNothing
     */
    public function testIsRequestErrorStatus()
    {
        // ----------------------------------------------------------------
        // setup your test

        // ----------------------------------------------------------------
        // perform the change

        $unit = new ImATeapotStatus;

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(RequestErrorStatus::class, $unit);
    }

    /**
     * @covers ::__construct
     * @covers ::getStatusCode
     */
    public function testHasStatusCode418()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedCode = 418;
        $expectedReason = "I'm a teapot";
        $expectedLine = $expectedCode . ' ' . $expectedReason;

        $unit = new ImATeapotStatus;

        // ----------------------------------------------------------------
        // perform the change

        $actualCode = $unit->getStatusCode();

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedCode, $actualCode);
    }

    /**
     * @covers ::__construct
     * @covers ::getReasonPhrase
     */
    public function testHasCorrectReasonPhrase()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedCode = 418;
        $expectedReason = "I'm a teapot";
        $expectedLine = $expectedCode . ' ' . $expectedReason;

        $unit = new ImATeapotStatus;

        // ----------------------------------------------------------------
        // perform the change

        $actualReason = $unit->getReasonPhrase();

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedReason, $actualReason);
    }

    /**
     * @covers ::__construct
     * @covers ::getStatusLine
     */
    public function testHasCorrectStatusLine()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedCode = 418;
        $expectedReason = "I'm a teapot";
        $expectedLine = $expectedCode . ' ' . $expectedReason;

        $unit = new ImATeapotStatus;

        // ----------------------------------------------------------------
        // perform the change

        $actualLine = $unit->getStatusLine();

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals($expectedLine, $actualLine);
    }
}
