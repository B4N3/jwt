<?php
declare(strict_types=1);

namespace Lcobucci\JWT;

use Lcobucci\JWT\Signer\Key;

trait Keys
{
    /** @var array<string, Key> */
    protected static array $rsaKeys;

    /** @var array<string, Key> */
    protected static array $ecdsaKeys;

    /** @beforeClass */
    public static function createRsaKeys(): void
    {
        $dir = 'file://' . __DIR__;

        static::$rsaKeys = [
            'private'           => new Key($dir . '/rsa/private.key'),
            'public'            => new Key($dir . '/rsa/public.key'),
            'encrypted-private' => new Key($dir . '/rsa/encrypted-private.key', 'testing'),
            'encrypted-public'  => new Key($dir . '/rsa/encrypted-public.key'),
        ];
    }

    /** @beforeClass */
    public static function createEcdsaKeys(): void
    {
        $dir = 'file://' . __DIR__;

        static::$ecdsaKeys = [
            'private'        => new Key($dir . '/ecdsa/private.key'),
            'private-params' => new Key($dir . '/ecdsa/private2.key'),
            'public1'        => new Key($dir . '/ecdsa/public1.key'),
            'public2'        => new Key($dir . '/ecdsa/public2.key'),
            'public-params'  => new Key($dir . '/ecdsa/public3.key'),
            'private_ec512'  => new Key($dir . '/ecdsa/private_ec512.key'),
            'public_ec512'   => new Key($dir . '/ecdsa/public_ec512.key'),
            'public2_ec512'  => new Key($dir . '/ecdsa/public2_ec512.key'),
        ];
    }
}
