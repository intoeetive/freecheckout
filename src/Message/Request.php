<?php
/**
 * Manual Gateway Request
 */

namespace Omnipay\FreeCheckout\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Manual Gateway Request
 */
class Request extends AbstractRequest
{
    public function getData()
    {
        $amount = $this->getAmount();
        
        if ($amount>0)
        {
            throw new InvalidRequestException("Operation not permitted");
        }

        return $this->getParameters();
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
