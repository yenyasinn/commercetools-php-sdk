<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\Categories\Command;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Common\LocalizedString;
use Sphere\Core\Request\AbstractAction;

/**
 * @package Sphere\Core\Request\Categories\Command
 * @apidoc http://dev.sphere.io/http-api-projects-categories.html#set-meta-keywords
 * @method string getAction()
 * @method CategorySetMetaKeywordsAction setAction(string $action = null)
 * @method LocalizedString getMetaKeywords()
 * @method CategorySetMetaKeywordsAction setMetaKeywords(LocalizedString $metaKeywords = null)
 */
class CategorySetMetaKeywordsAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'metaKeywords' => [static::TYPE => '\Sphere\Core\Model\Common\LocalizedString'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('setMetaKeywords');
    }
}
