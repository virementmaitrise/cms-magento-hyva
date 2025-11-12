<?php

namespace Virementmaitrise\HyvaPayment\Plugin\Method;

use Virementmaitrise\HyvaPayment\Gateway\Config\Config;
use Magento\Payment\Model\Method\Adapter;

class AdapterPlugin
{
    protected Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Adapter $subject
     * @param string $result
     *
     * @return string
     */
    public function afterGetTitle(Adapter $subject, $result)
    {
        if ($subject->getCode() !== 'virementmaitrise') {
            return $result;
        }

        $design = $this->config->getCheckoutDesign();

        if ($design === 'ist_long' || $design === 'ist_short') {
            $label = __('Virement Maitrisé');
        } else {
            $label = __('Virement Maitrisé');
        }

        return $label;
    }
}
