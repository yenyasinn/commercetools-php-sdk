<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Cart;

use Commercetools\Core\Model\Common\Collection;

/**
 * @package Commercetools\Core\Model\Cart
 * @link https://dev.commercetools.com/http-api-projects-carts.html#custom-line-item
 * @method CustomLineItem current()
 * @method CustomLineItemCollection add(CustomLineItem $element)
 * @method CustomLineItem getAt($offset)
 */
class CustomLineItemCollection extends Collection
{
    protected $type = '\Commercetools\Core\Model\Cart\CustomLineItem';
}
