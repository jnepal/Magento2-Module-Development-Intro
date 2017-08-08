<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/3/17
 * Time: 12:34
 */

namespace Acme\HelloWorldEvent\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\DataObject;

class Display extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {

        $textDisplay = new DataObject(array('text' => 'Hello World Again'));
        $this->_eventManager->dispatch('acme_helloworldevent_display_text', ['text' => $textDisplay]);
        echo $textDisplay->getData('text');

    }
}