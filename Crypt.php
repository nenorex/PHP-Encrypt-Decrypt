<?php

/**
 * Created by PhpStorm.
 * User: NENOREX TECHNOLOGIES
 * Date: 4/5/2018
 * Time: 1:45 AM
 */
class Crypt
{
    private $key,$iv_size,$iv;

    /**
     * constructor
     * @param $key (string:'TheKey')
     * @return void
     */
        function __construct($key='TheKey'){
            $this->iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
            $this->iv = mcrypt_create_iv($this->iv_size, MCRYPT_RAND);
            $this->key = trim($key);
        }


}