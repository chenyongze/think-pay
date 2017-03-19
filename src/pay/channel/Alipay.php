<?php
// +----------------------------------------------------------------------
// | ThinkPay
// +----------------------------------------------------------------------
// | Copyright (c) yunwuxin All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace yunwuxin\pay\channel;

use yunwuxin\pay\Channel;
use yunwuxin\pay\exception\ConfigException;
use yunwuxin\pay\gateway\alipay\App;
use yunwuxin\pay\gateway\alipay\QrCode;

class Alipay extends Channel
{
    const APP = 'app';
    const QR  = 'qr';

    protected static $gateways = [
        self::APP => App::class,
        self::QR  => QrCode::class
    ];

    protected $appId;
    protected $publicKey;
    protected $privateKey;

    public function __construct($config)
    {
        if (empty($config['app_id']) || empty($config['public_key']) || empty($config['private_key'])) {
            throw new ConfigException;
        }
        $this->appId      = $config['app_id'];
        $this->publicKey  = $config['public_key'];
        $this->privateKey = $config['private_key'];
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @return mixed
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    public function getSellerId()
    {

    }
}