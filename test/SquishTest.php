<?php

namespace Inilim\Test;

use Inilim\Test\TestCaseAbstract;

class SquishTest extends TestCaseAbstract
{
    function test()
    {
        $this->assertSame('laravel php framework', \_str()->squish(' laravel   php  framework '));
        $this->assertSame('laravel php framework', \_str()->squish("laravel\t\tphp\n\nframework"));
        $this->assertSame('laravel php framework', \_str()->squish('
            laravel
            php
            framework
        '));
        $this->assertSame('laravel php framework', \_str()->squish('   laravel   php   framework   '));
        $this->assertSame('123', \_str()->squish('   123    '));
        $this->assertSame('だ', \_str()->squish('だ'));
        $this->assertSame('ム', \_str()->squish('ム'));
        $this->assertSame('だ', \_str()->squish('   だ    '));
        $this->assertSame('ム', \_str()->squish('   ム    '));
        $this->assertSame('привет', \_str()->squish('   привет    '));
        $this->assertSame('laravel php framework', \_str()->squish('laravelㅤㅤㅤphpㅤframework'));
        $this->assertSame('laravel php framework', \_str()->squish('laravelᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠphpᅠᅠframework'));
        $this->assertSame('same same', \_str()->squish("same\nsame"));
        $this->assertSame('same same', \_str()->squish("same\tsame"));
        $this->assertSame('same same', \_str()->squish("same\t\nsame"));
    }
}
