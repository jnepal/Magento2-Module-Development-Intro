<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/3/17
 * Time: 14:02
 */

namespace Acme\HelloNepal\Block;

use Magento\Framework\View\Element\Template;
use Magento\Theme\BLock\Html\Header\Logo;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\UrlInterface;
use Zend\View\Helper\Url;
use Magento\Framework\App\ObjectManager;

class Index extends Template
{
    protected $_logo;
    protected  $_storeManager;
    protected $_urlInterface;

    public function __construct(Template\Context $context,
                                Logo $logo,
                                StoreManagerInterface $storeManager,
                                UrlInterface $urlInterface
    )
    {
        $this->_urlInterface = $urlInterface;
        $this->_logo = $logo;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    // To check where the current route is home page or not
    public function isHomePage()
    {
        return $this->_logo->isHomePage();
    }
    // Check whether the current route is secure or not
    public function isSecure()
    {
        return $this->_storeManager->getStore()->isCurrentlySecure();
    }

    // Get Current Url Using Store Manager object

    public function getUrlViaStoreManagerObject ()
    {

        echo 'Base URL ' . $this->_storeManager->getStore()->getBaseUrl();
        echo '<br>';
        echo 'Web URL ' . $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_WEB);
        echo '<br>';
        echo 'Direct Link ' . $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_DIRECT_LINK);
        echo '<br>';
        echo 'Media ' . $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_MEDIA);
        echo '<br>';
        echo 'Static ' . $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_STATIC);
        echo '<br>';

        echo 'Product Url ' . $this->_storeManager->getStore()->getUrl('product/5');
        echo '<br>';
        echo 'Parameter False ' . $this->_storeManager->getStore()->getCurrentUrl(false);
        echo '<br>';
        echo 'Base Media Url ' . $this->_storeManager->getStore()->getBaseMediaDir();
        echo '<br>';
        echo 'Static Url ' . $this->_storeManager->getStore()->getBaseStaticDir();
        echo '<br>';


    }

    // Get Url using Url Interface
    public function getUrlViaUrlInterface ()
    {
        echo 'Current Url ' . $this->_urlInterface->getCurrentUrl();
        echo '<br>';
        echo 'Base Url ' . $this->_urlInterface->getUrl();
        echo '<br>';
        echo 'Hello World Url ' . $this->_urlInterface->getUrl('helloworld/index/display');
        echo '<br>';
        echo 'Base Url ' . $this->_urlInterface->getUrl();
        echo '<br>';
    }

    // Get the block of other module
    public function getChangeProductImageBlock ()
    {
        $objectManager = ObjectManager::getInstance();
        $changeProduleImageBlock = $objectManager->get('Acme\ChangeProductImage\BLock\ChangeProductImageSize');

        var_dump($changeProduleImageBlock);

    }

    public function getLogoDetails()
    {
        $logoDetails = [];

        $logoDetails['logoSrc'] = $this->_logo->getLogoSrc();
        $logoDetails['logoAlt'] = $this->_logo->getLogoAlt();
        $logoDetails['logoWidth'] = $this->_logo->getLogoWidth();
        $logoDetails['logoHeight'] = $this->_logo->getLogoHeight();

        return $logoDetails;

    }

}