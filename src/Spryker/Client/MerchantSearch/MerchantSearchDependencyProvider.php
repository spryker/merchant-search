<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Client\MerchantSearch;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;
use Spryker\Client\MerchantSearch\Dependency\Client\MerchantSearchToSearchClientBridge;
use Spryker\Client\MerchantSearch\Plugin\Elasticsearch\Query\MerchantSearchQueryPlugin;
use Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface;

/**
 * @method \Spryker\Client\MerchantSearch\MerchantSearchConfig getConfig()
 */
class MerchantSearchDependencyProvider extends AbstractDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_SEARCH = 'CLIENT_SEARCH';

    /**
     * @var string
     */
    public const PLUGIN_MERCHANT_SEARCH_QUERY = 'PLUGIN_MERCHANT_SEARCH_QUERY';

    /**
     * @var string
     */
    public const PLUGINS_MERCHANT_SEARCH_RESULT_FORMATTER = 'PLUGINS_MERCHANT_SEARCH_RESULT_FORMATTER';

    /**
     * @var string
     */
    public const PLUGINS_MERCHANT_SEARCH_QUERY_EXPANDER = 'PLUGINS_MERCHANT_SEARCH_QUERY_EXPANDER';

    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = parent::provideServiceLayerDependencies($container);

        $container = $this->addSearchClient($container);
        $container = $this->addMerchantSearchQueryExpanderPlugins($container);
        $container = $this->addMerchantSearchQueryPlugin($container);
        $container = $this->addMerchantSearchResultFormatterPlugins($container);

        return $container;
    }

    protected function addSearchClient(Container $container): Container
    {
        $container->set(static::CLIENT_SEARCH, function (Container $container) {
            return new MerchantSearchToSearchClientBridge(
                $container->getLocator()->search()->client(),
            );
        });

        return $container;
    }

    protected function addMerchantSearchQueryPlugin(Container $container): Container
    {
        $container->set(static::PLUGIN_MERCHANT_SEARCH_QUERY, function () {
            return $this->createMerchantSearchQueryPlugin();
        });

        return $container;
    }

    protected function createMerchantSearchQueryPlugin(): QueryInterface
    {
        return new MerchantSearchQueryPlugin();
    }

    protected function addMerchantSearchQueryExpanderPlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_MERCHANT_SEARCH_QUERY_EXPANDER, function () {
            return $this->getMerchantSearchQueryExpanderPlugins();
        });

        return $container;
    }

    protected function addMerchantSearchResultFormatterPlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_MERCHANT_SEARCH_RESULT_FORMATTER, function () {
            return $this->getMerchantSearchResultFormatterPlugins();
        });

        return $container;
    }

    /**
     * @return array<\Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface>
     */
    protected function getMerchantSearchResultFormatterPlugins(): array
    {
        return [];
    }

    /**
     * @return array<\Spryker\Client\SearchExtension\Dependency\Plugin\QueryExpanderPluginInterface>
     */
    protected function getMerchantSearchQueryExpanderPlugins(): array
    {
        return [];
    }
}
