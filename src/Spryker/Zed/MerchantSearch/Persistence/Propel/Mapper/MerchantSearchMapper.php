<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSearch\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\MerchantSearchTransfer;
use Orm\Zed\MerchantSearch\Persistence\SpyMerchantSearch;

class MerchantSearchMapper
{
    public function mapMerchantSearchTransferToMerchantSearchEntity(
        MerchantSearchTransfer $merchantSearchTransfer,
        SpyMerchantSearch $merchantSearchEntity
    ): SpyMerchantSearch {
        /** @var int $idMerchant */
        $idMerchant = $merchantSearchTransfer->requireIdMerchant()->getIdMerchant();

        $merchantSearchEntity->setFkMerchant($idMerchant)
            ->fromArray($merchantSearchTransfer->toArray());

        return $merchantSearchEntity;
    }
}
