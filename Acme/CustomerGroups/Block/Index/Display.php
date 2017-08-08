<?php


namespace Acme\CustomerGroups\Block\Index;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\ResourceModel\Group\Collection;
use PHPCuong\Region\Model\ResourceModel\Region\CollectionFactory;

class Display extends Template
{
    protected $_customerGroup;

    public function __construct(
        Template\Context $context,
        Collection $customerGroup,
        array $data = [])
    {
        $this->_customerGroup = $customerGroup;
        parent::__construct($context, $data);
    }

    public function getCustomerGroup()
    {
        $customerGroups = $this->_customerGroup->toOptionArray();
        array_unshift($customerGroups, array('value' => '', 'label' => ''));

        return $customerGroups;
    }
}
