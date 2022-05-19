<?php

namespace Test;

use App\Strings;
use PHPUnit\Framework\TestCase;

/**
 * implode
 * explode
 * strpos
 * substr
 * str_replace
 * preg_match_all * опционально
 *
 * слабое сравнене ==
 * 0    ->  false
 * []   ->  false
 * ''   ->  false
 * null ->  false
 * сильное сравнение ===
 *
 * https://phpunit.readthedocs.io/en/9.5/assertions.html#assertequals
 */
class StringsTest extends TestCase
{
    public function testExample()
    {
        $s = new Strings();
        $this->assertEquals(
            'йохохо йохохо йохохо ',
            $s->exampleStrRepeat('йохохо ', 3)
        );
    }

    public function testConcatenation()
    {
        $s = new Strings();
        $this->assertEquals(
            'this string is one',
            $s->concatenate('this string ', 'is one')
        );
    }

    public function testExplodeAndReverse()
    {
        $s = new Strings();

        $this->assertEquals(
            ['5', '4', '3', '2', '1',],
            $s->explodeAndReverse('1,2,3,4,5')
        );
    }

    public function testImplode()
    {
        $s = new Strings();

        $this->assertEquals(
            '12',
            $s->implodeString(['1', '2'])
        );
    }

    public function testReplace()
    {
        $s = new Strings();

        $this->assertEquals(
            'У маши были 15 сушек',
            $s->replaceString('У маши были %numberOfSushek% сушек', 15)
        );
    }

    public function testRegex()
    {
        $s = new Strings();

        $str = 'http://google.com/?q=сколько+бизнес+ланчей+нужно+сьесть+чтоб+стать+бизнесом&x=232444&y=5';

        $this->assertEquals(
            '232444',
            $s->findXWithRegex($str)
        );
    }
}
