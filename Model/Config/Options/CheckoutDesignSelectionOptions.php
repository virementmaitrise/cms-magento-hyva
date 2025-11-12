<?php

namespace Virementmaitrise\HyvaPayment\Model\Config\Options;

class CheckoutDesignSelectionOptions implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'it', 'label' => __('Simplified Transfer')],
            ['value' => 'ist', 'label' => __('Simplified Transfer & Classic Transfer')],
            ['value' => 'ist_long', 'label' => __('Long version')],
            ['value' => 'ist_short', 'label' => __('Short version')],
        ];
    }
}
