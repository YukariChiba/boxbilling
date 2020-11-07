<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

class Model_Transaction extends Box_Model
{
    const STATUS_RECEIVED        = 'received';
    const STATUS_APPROVED        = 'approved';
    const STATUS_PROCESSED       = 'processed';
    const STATUS_ERROR           = 'error';
}