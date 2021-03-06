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

return [
    'test'       => true,//沙箱模式
    'charge'     => 'app\\model\\Charge',
    'channels'   => [
        'alipay' => [
            'app_id'      => '',
            'public_key'  => '',
            'private_key' => ''
        ],
        'wechat' => [
            'key'       => '',
            'app_id'    => '',
            'mch_id'    => '',
            'cert_path' => '',
            'key_path'  => ''
        ]
    ],
    'notify_url' => '',//留空则设为PAY_NOTIFY对应的路由
    'route'      => true,//是否注册路由
];