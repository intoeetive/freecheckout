<?php

namespace Omnipay\FreeCheckout;

use Omnipay\Common\AbstractGateway;
use Omnipay\FreeCheckout\Message\Request;


/**
 * FreeCheckout Class
 * http://payment-services.ingenico.com/FreeCheckout/support/guides/integration%20guides/e-commerce
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'FreeCheckout';
    }

    public function getDefaultParameters()
    {
        return array();
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\FreeCheckout\Message\Request', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\FreeCheckout\Message\Request', $parameters);
    }

    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\FreeCheckout\Message\Request', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\FreeCheckout\Message\Request', $parameters);
    }
}
