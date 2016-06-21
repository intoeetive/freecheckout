<?php
/**
 * Manual Gateway Response
 */

namespace Omnipay\FreeCheckout\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Manual Gateway Response
 */
class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }
}
