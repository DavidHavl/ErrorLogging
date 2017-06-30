<?php
/**
 * Response Sender Interface
 *
 * @author     David Havl <contact@DavidHavl.com>
 * @copyright  Copyright 2004-2015 David Havl
 * @license    MIT , http://DavidHavl.com/license/MIT
 * @link       http://DavidHavl.com
 */
namespace DhErrorLogging\Sender;

use Zend\Stdlib\RequestInterface;
use Zend\Stdlib\ResponseInterface;
use Zend\Mvc\ResponseSender\SendResponseEvent;
use DhErrorLogging\Options\ModuleOptions;

interface ResponseSenderInterface
{

    public function __construct(RequestInterface $request, ResponseInterface $response, ModuleOptions $options);

    /**
     * Send the response
     *
     * @param SendResponseEvent $event
     * @return void
     */
    public function send(SendResponseEvent $event);
}
