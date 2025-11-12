<?php

declare(strict_types=1);

namespace Virementmaitrise\HyvaPayment\Block\Adminhtml\System\Config\Fieldset;

use Magento\Config\Block\System\Config\Form\Fieldset;

class Payment extends Fieldset
{
    public function _getFrontendClass($element)
    {
        return parent::_getFrontendClass($element) . ' with-button';
    }

    public function _getHeaderTitleHtml($element)
    {
        $logo = $this->getViewFileUrl('Virementmaitrise_HyvaPayment::images/logo.png');

        $htmlId = $element->getHtmlId();
        $state = $this->getUrl('adminhtml/*/state');

        $html = '<div class="config-heading">
            <div class="heading">
                <img src="' . $logo . '" alt="Virement Maitrisé" title="Virement Maitrisé">
                <div>
                    <strong>' . $element->getLegend() . '</strong>
                    <span class="heading-intro">' . $element->getComment() . '</span>
                </div>
            </div>

            <div class="button-container">
                <button type="button"
                class="button action-configure"
                id="' . $htmlId . '-head"
                onclick="ckoToggleSolution.call(this, \'' . $htmlId . '\', \'' . $state . '\'); return false;">
                    <span class="state-closed">' . __('Configure') . '</span>
                    <span class="state-opened">' . __('Close') . '</span>
                </button>
            </div>
        </div>';

        return $html;
    }
}
