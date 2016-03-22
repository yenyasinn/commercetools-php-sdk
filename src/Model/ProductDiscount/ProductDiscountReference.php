<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 * @created: 27.01.15, 18:22
 */

namespace Commercetools\Core\Model\ProductDiscount;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Model\Common\Reference;

/**
 * @package Commercetools\Core\Model\ProductDiscount
 * @link https://dev.commercetools.com/http-api-types.html#reference-types
 * @link https://dev.commercetools.com/http-api-projects-productDiscounts.html#product-discount
 * @method string getTypeId()
 * @method ProductDiscountReference setTypeId(string $typeId = null)
 * @method string getId()
 * @method ProductDiscountReference setId(string $id = null)
 * @method ProductDiscount getObj()
 * @method ProductDiscountReference setObj(ProductDiscount $obj = null)
 * @method string getKey()
 * @method ProductDiscountReference setKey(string $key = null)
 */
class ProductDiscountReference extends Reference
{
    const TYPE_PRODUCT_DISCOUNT = 'product-discount';

    public function fieldDefinitions()
    {
        $fields = parent::fieldDefinitions();
        $fields[static::OBJ] = [static::TYPE => '\Commercetools\Core\Model\ProductDiscount\ProductDiscount'];

        return $fields;
    }

    /**
     * @param $id
     * @param Context|callable $context
     * @return ProductDiscountReference
     */
    public static function ofId($id, $context = null)
    {
        return static::ofTypeAndId(static::TYPE_PRODUCT_DISCOUNT, $id, $context);
    }
}
