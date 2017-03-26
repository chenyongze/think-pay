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
    'test'     => true,
    'charge'   => 'app\\model\\Charge',
    'channels' => [
        'alipay' => [
            'app_id'      => '',
            'public_key'  => '',
            'private_key' => ''
        ],
        'wechat' => [
            'key'    => '',
            'app_id' => '',
            'mch_id' => ''
        ]
    ]
];