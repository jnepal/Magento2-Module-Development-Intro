<?php


namespace Acme\ProductsCollection\Block\Index;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    protected $_productCollectionFactory;

    public function __construct(Template\Context $context,
                                CollectionFactory $productCollectionFactory,
                                array $data = [])
    {
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();

        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // fetching only 3 products

        return $collection;
    }
}
