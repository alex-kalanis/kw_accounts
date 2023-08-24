<?php

namespace TraitsTests;


use CommonTestClass;
use kalanis\kw_accounts\AccountsException;
use kalanis\kw_accounts\Data\TExpire;
use kalanis\kw_accounts\Interfaces\IExpire;
use kalanis\kw_accounts\Traits;


class ExpireTest extends CommonTestClass
{
    /**
     * @throws AccountsException
     */
    public function testExpire(): void
    {
        $target = new Expire();
        $lib = new MockExpiration(700, 100);
        $this->assertFalse($target->willExpire());

        $lib->setExpirationNotice($target, 650);
        $this->assertTrue($target->willExpire());

        $lib->setExpirationNotice($target, 750);
        $this->assertFalse($target->willExpire());

        $lib->updateExpirationTime($target);
        $this->assertEquals(1350, $target->getExpireTime());
    }
}


class MockExpiration
{
    use Traits\TExpiration;

    public function __construct(int $changeInterval, int $changeNoticeBefore)
    {
        $this->initExpiry($changeInterval, $changeNoticeBefore);
    }

    protected function getTime(): int
    {
        return 650;
    }
}


class Expire implements IExpire
{
    use TExpire;
}
