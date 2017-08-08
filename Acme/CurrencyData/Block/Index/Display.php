<?php


namespace Acme\CurrencyData\Block\Index;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Directory\Model\Currency;

class Display extends Template
{
    protected $_storeManager;
    protected $_currency;

    public function __construct(Template\Context $context, StoreManagerInterface $storeManager, Currency $currency, array $data = [])
    {
        $this->_storeManager =  $storeManager;
        $this->_currency = $currency;

        parent::__construct($context, $data);
    }

    // Get Base Currency code
    public function getBaseCurrencyCode()
    {
        return $this->_storeManager-getStore()->getBaseCurrencyCode();
    }

    // Get Current store currency code
    public function getCurrentCurrencyCode()
    {
        return $this->_storeManager->getStore()->getCurrentCurrencyCode();
    }

    // Get Default currency code
    public function getDefaultCurrencyCode()
    {
        return $this->_storeManager->getStore()->getDefaultCurrencyCode();
    }

    // Get Available currency code
    public function getAvailableCurrencyCodes($skipBaseNotAllowed = false)
    {
        return $this->_storeManager->getStore()->getAvailableCurrencyCodes($skipBaseNotAllowed);
    }

    // Get Allowed Currencies
    public function getAllowedCurrencies()
    {
        return $this->_storeManager->getStore()->getAllowedCurrencies();
    }

    // Get Current Currency Rate
    public function getCurrentCurrencyRate()
    {
        return $this->_storeManager->getStore()->getCurrentCurrencyRate();
    }

    // Get Current Currency Symbol
    public function getCurrentCurrencySymbol()
    {
        return $this->_storeManager->getStore()->getCurrencySysmbol();
    }
}
