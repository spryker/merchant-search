<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Client\MerchantSearch\Dependency\Client;

use Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface;

class MerchantSearchToSearchClientBridge implements MerchantSearchToSearchClientInterface
{
    /**
     * @var \Spryker\Client\Search\SearchClientInterface
     */
    protected $searchClient;

    /**
     * @param \Spryker\Client\Search\SearchClientInterface $searchClient
     */
    public function __construct($searchClient)
    {
        $this->searchClient = $searchClient;
    }

    /**
     * @param \Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface $searchQuery
     * @param \Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface[] $resultFormatters
     * @param mixed[] $requestParameters
     *
     * @return array|\Elastica\ResultSet|mixed
     */
    public function search(QueryInterface $searchQuery, array $resultFormatters = [], array $requestParameters = [])
    {
        return $this->searchClient->search($searchQuery, $resultFormatters, $requestParameters);
    }

    /**
     * @param \Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface $searchQuery
     * @param \Spryker\Client\SearchExtension\Dependency\Plugin\QueryExpanderPluginInterface[] $searchQueryExpanders
     * @param mixed[] $requestParameters
     *
     * @return \Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface
     */
    public function expandQuery(QueryInterface $searchQuery, array $searchQueryExpanders, array $requestParameters = [])
    {
        return $this->searchClient->expandQuery($searchQuery, $searchQueryExpanders, $requestParameters);
    }
}
