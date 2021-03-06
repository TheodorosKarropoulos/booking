<?php
class Hash{

    /**
     *
     * Enter description here ...
     * @param string $algo The algorithm (md5, sha1, etc)
     * @param string $data The data to encode
     * @param string $salt The salt
     * @return string The hash/salted data
     */
    public static function create($algo, $data, $salt){

        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);

        return hash_final($context);
    }
}