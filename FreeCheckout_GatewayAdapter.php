<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class FreeCheckout_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "FreeCheckout";
    }
}
