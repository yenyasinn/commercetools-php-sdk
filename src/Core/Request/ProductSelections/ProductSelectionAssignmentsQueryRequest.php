<?php

namespace Commercetools\Core\Request\ProductSelections;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractQueryRequest;
use Commercetools\Core\Model\ProductSelection\ProductSelectionCollection;
use Commercetools\Core\Response\ApiResponseInterface;
use Commercetools\Core\Model\MapperInterface;

/**
 * @package Commercetools\Core\Request\ProductSelections
 * @link https://docs.commercetools.com/api/projects/product-selections#query-products-available-in-a-store-through-active-product-selections
 * @method ProductSelectionCollection mapResponse(ApiResponseInterface $response)
 * @method ProductSelectionCollection mapFromResponse(ApiResponseInterface $response, MapperInterface $mapper = null)
 */
class ProductSelectionAssignmentsQueryRequest extends AbstractQueryRequest
{
    protected $resultClass = ProductSelectionCollection::class;

    /**
     * @param Context $context
     */
    public function __construct(Context $context = null)
    {
        parent::__construct('product-selection-assignments', $context);
    }

    /**
     * @param Context $context
     * @return static
     */
    public static function of(Context $context = null)
    {
        return new static($context);
    }
}
