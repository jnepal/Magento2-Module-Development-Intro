<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/4/17
 * Time: 12:10
 */

namespace Acme\HelloWorldEvent\Observer;

use Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;

class ChangeDisplayText implements ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('text');
        $displayText->setText('Event Executed Successfully');

        return $this;
    }
}