<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSearch\Business\Mapper;

use Generated\Shared\Transfer\MerchantCollectionTransfer;
use Generated\Shared\Transfer\MerchantSearchCollectionTransfer;
use Generated\Shared\Transfer\MerchantSearchTransfer;
use Generated\Shared\Transfer\MerchantTransfer;

interface MerchantSearchMapperInterface
{
    public function mapMerchantTransferToMerchantSearchTransfer(
        MerchantTransfer $merchantTransfer,
        MerchantSearchTransfer $merchantSearchTransfer
    ): MerchantSearchTransfer;

    public function mapMerchantCollectionTransferToMerchantSearchCollectionTransfer(
        MerchantCollectionTransfer $merchantCollectionTransfer,
        MerchantSearchCollectionTransfer $merchantSearchCollectionTransfer
    ): MerchantSearchCollectionTransfer;
}
