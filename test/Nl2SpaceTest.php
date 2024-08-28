<?php

namespace Inilim\Test;

use Inilim\Test\TestCaseAbstract;

class Nl2SpaceTest extends TestCaseAbstract
{
    function test()
    {
        $this->assertSame(' same same same ', \_str()->nl2space('
same
same
same
'));
        $this->assertSame(' same  same  same ', \_str()->nl2space('
same

same

same
'));

        $this->assertSame('same same same', \_str()->nl2space('
            same

            same

            same
        ', squish: true));
    }
}
