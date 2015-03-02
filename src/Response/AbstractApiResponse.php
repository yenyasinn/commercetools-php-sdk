<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 26.01.15, 14:44
 */

namespace Sphere\Core\Response;


use GuzzleHttp\Message\ResponseInterface;
use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Common\ContextAwareInterface;
use Sphere\Core\Model\Common\ContextTrait;
use Sphere\Core\Request\ClientRequestInterface;

/**
 * Class AbstractApiResponse
 * @package Sphere\Core\Response
 */
abstract class AbstractApiResponse implements ApiResponseInterface, ContextAwareInterface
{
    use ContextTrait;

    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @var ClientRequestInterface
     */
    protected $request;

    /**
     * @param ResponseInterface $response
     * @param ClientRequestInterface $request
     * @param Context $context
     */
    public function __construct(ResponseInterface $response, ClientRequestInterface $request, Context $context = null)
    {
        $this->setContext($context);
        $this->response = $response;
        $this->request = $request;
    }

    /**
     * @return mixed|null
     */
    public function toObject()
    {
        if (!$this->isError()) {
            return $this->getRequest()->mapResult($this->toArray(), $this->getContext());
        }

        return null;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->response->json();
    }

    /**
     * @return \GuzzleHttp\Stream\StreamInterface|null
     */
    public function getBody()
    {
        return $this->response->getBody();
    }

    /**
     * @return bool
     */
    public function isError()
    {
        $statusCode = $this->response->getStatusCode();

        return ($statusCode != 200);
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return ClientRequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }
}
