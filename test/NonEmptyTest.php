<?php

namespace Inilim\Test;

use Inilim\Test\TestCaseAbstract;

class NonEmptyTest extends TestCaseAbstract
{
    function test()
    {
        $true = [
            'a',
            ' ',
            "\n",
            "\t",
        ];

        $false = [
            '',
        ];

        foreach ($true as $item) {
            $this->assertTrue(\_str()->nonEmpty($item));
        }

        foreach ($false as $item) {
            $this->assertFalse(\_str()->nonEmpty($item));
        }
    }
}
