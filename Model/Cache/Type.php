<?php

declare(strict_types=1);

namespace Virementmaitrise\HyvaPayment\Model\Cache;

class Type extends \Magento\Framework\Cache\Frontend\Decorator\TagScope
{
    public const TYPE_IDENTIFIER = 'virementmaitrise_cache';
    public const CACHE_TAG = 'VIREMENTMAITRISE_CACHE';

    /**
     * @param \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
     */
    public function __construct(\Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
    ) {
        parent::__construct(
            $cacheFrontendPool->get(self::TYPE_IDENTIFIER),
            self::CACHE_TAG
        );
    }
}
