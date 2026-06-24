<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\MerchantSearch;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class MerchantSearchConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * Defines resource name, that will be used for key generation.
     *
     * @var string
     */
    public const MERCHANT_RESOURCE_NAME = 'merchant';

    /**
     * @api
     *
     * Defines queue name as used for processing translation messages.
     *
     * @var string
     */
    public const SYNC_SEARCH_MERCHANT = 'sync.search.merchant';

    /**
     * @api
     *
     * This events that will be used for key writing.
     *
     * @var string
     */
    public const MERCHANT_PUBLISH = 'Merchant.merchant.publish';

    /**
     * @api
     *
     * @uses \Spryker\Zed\MerchantCategory\Dependency\MerchantCategoryEvents::ENTITY_SPY_MERCHANT_CATEGORY_UPDATE
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_CATEGORY_UPDATE = 'Entity.spy_merchant_category.update';

    /**
     * @api
     *
     * @uses \Spryker\Zed\MerchantCategory\Dependency\MerchantCategoryEvents::ENTITY_SPY_MERCHANT_CATEGORY_CREATE
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_CATEGORY_CREATE = 'Entity.spy_merchant_category.create';

    /**
     * @api
     *
     * This events will be used for spy_merchant_category entity deletion.
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_CATEGORY_DELETE = 'Entity.spy_merchant_category.delete';

    /**
     * @api
     *
     * This events that will be used when spy_category changes happened.
     *
     * @var string
     */
    public const MERCHANT_CATEGORY_PUBLISH = 'MerchantCategory.merchant_category.publish';

    /**
     * @api
     *
     * This events will be used for spy_merchant entity creation.
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_CREATE = 'Entity.spy_merchant.create';

    /**
     * @api
     *
     * This events will be used for spy_merchant entity changes.
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_UPDATE = 'Entity.spy_merchant.update';

    /**
     * @api
     *
     * This events will be used for spy_merchant entity deletion.
     *
     * @var string
     */
    public const ENTITY_SPY_MERCHANT_DELETE = 'Entity.spy_merchant.delete';

    /**
     * @api
     *
     * @uses \Spryker\Zed\Merchant\MerchantConfig::STATUS_APPROVED
     *
     * @var string
     */
    public const MERCHANT_STATUS_APPROVED = 'approved';
}
