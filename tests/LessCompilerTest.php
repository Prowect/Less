<?php

namespace tests;

use Drips\LessCompiler\LessCompiler;
use PHPUnit_Framework_TestCase;

class LessCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateProvider
     */
    public function testLessCompiler($less, $css)
    {
        $compiler = new LessCompiler;
        $this->assertEquals($compiler->compile($less), $css);
    }

    public function dateProvider()
    {
        return array(
            array(file_get_contents(__DIR__."/test.less"), file_get_contents(__DIR__."/test.css"))
        );
    }
}
