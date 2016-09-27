<?php
namespace App\Services;

class DataSafeService{
    public function callMe(){
        dd('Testing service provider');
    }

    /**
     * @param $str
     * @param null $key
     * @return string
     */
    public function DesEncrypt($str,$key=null){
        $size = mcrypt_get_block_size ( MCRYPT_DES, MCRYPT_MODE_CBC );
        $str = self::pkcs5Pad ( $str, $size );

        return base64_encode(mcrypt_encrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_CBC, $key));
    }

    /**
     * Rsa encrypt
     * @param $str
     * @param null $key
     * @return bool|string
     */
    public function DesDecrypt($str,$key=null){
        $str = base64_decode($str);
        $str = mcrypt_decrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_CBC, $key);
        $str = self::pkcs5Unpad($str);

        return $str;
    }

    /**
     * des加密填充
     * @param $text
     * @param $blocksize
     * @return string
     */
    public function pkcs5Pad($text,$blocksize){
        $pad = $blocksize - (strlen ( $text ) % $blocksize);
        return $text . str_repeat ( chr ( $pad ), $pad );
    }

    /**
     * des加密去掉填充字符
     * @param $text
     * @return bool|string
     */
    public function pkcs5Unpad($text){
        $pad = ord ( $text {strlen ( $text ) - 1} );
        if ($pad > strlen ( $text ))
            return false;
        if (strspn ( $text, chr ( $pad ), strlen ( $text ) - $pad ) != $pad)
            return false;
        return substr ( $text, 0, - 1 * $pad );
    }

    /**
     * Rsa decrypt
     * @param $text
     * @param null $key
     * @return mixed
     */
    public function RsaDecrypt($text,$key=null){
        if ($key === null) {
            $key = self::getKey('private');
        }

        $encrypted = base64_decode($text);

        openssl_private_decrypt($encrypted, $decrypted, $key);

        return $decrypted;
    }

    /**
     * Rsa encrypt
     * @param $text
     * @param null $key
     * @return string
     */
    public function RsaEncrypt($text,$key=null){
        if ($key === null) {
            $key = self::getKey('public');
        }

        openssl_public_encrypt($text, $encrypted, $key);

        return base64_encode($encrypted);
    }

    /**
     * get rand string
     * default length is eight
     * @param int $len
     */
    public function getRandStr($len=8){
        $str= "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $str_len = strlen($str)-1;
        str_shuffle($str);
        $s = '';
        for($i=0; $i<$len; $i++)
        {
            $s .= $str[rand(0,$str_len)];
        }
        return $s;
    }

}