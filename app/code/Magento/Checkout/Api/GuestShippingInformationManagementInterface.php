<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Checkout\Api;

interface GuestShippingInformationManagementInterface
{
    /**
     * @param string $cartId
     * @param Data\ShippingInformationInterface $addressInformation
     * @return mixed
     */
    public function saveAddressInformation(
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    );
}
