<?php

/**
 * LiqPay Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @updated Yaroslav Kozar 2021
 */

namespace LiqpayMagento\LiqPay\Api;

interface LiqPayCallbackInterface
{
    /**
     * @api
     * @return null
     */
    public function callback();
}