<?php

namespace kalanis\kw_accounts\Data;


/**
 * Trait TExpire
 * @package kalanis\kw_accounts\Data
 * Expiration
 */
trait TExpire
{
    protected bool $showNotice = false;
    protected int $expireTime = 0;

    public function setExpireNotice(bool $expiry): void
    {
        $this->showNotice = $expiry;
    }

    public function willExpire(): bool
    {
        return $this->showNotice;
    }

    public function getExpireTime(): int
    {
        return $this->expireTime;
    }

    public function updateExpireTime(int $expireTime): void
    {
        $this->expireTime = $expireTime;
    }
}
