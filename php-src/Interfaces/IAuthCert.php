<?php

namespace kalanis\kw_accounts\Interfaces;


use kalanis\kw_accounts\AccountsException;
use kalanis\kw_locks\LockException;


/**
 * Interface IAuthCert
 * @package kalanis\kw_accounts\Interfaces
 * Authentication sources available on your system - for certificates
 */
interface IAuthCert extends IAuth
{
    /**
     * Update cert data in storage
     * @param string $userName
     * @param string|null $certKey
     * @param string|null $certSalt
     * @throws AccountsException
     * @throws LockException
     * @return bool
     */
    public function updateCertKeys(string $userName, ?string $certKey, ?string $certSalt): bool;

    /**
     * Cet cert data from storage
     * @param string $userName
     * @throws AccountsException
     * @throws LockException
     * @return IUserCert|null
     */
    public function getCertData(string $userName): ?IUserCert;
}
