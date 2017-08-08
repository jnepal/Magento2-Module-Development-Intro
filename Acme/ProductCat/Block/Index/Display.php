<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/7/17
 * Time: 14:04
 */

namespace Acme\ProductCat\Block\Index;

use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    protected $_categoryCollectionFactory;
    protected $_productRepository;
    protected $_registry;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        ProductRepository $productRepository,
        Registry $registry,
        array $data = [])
    {
        $this->_categoryCollectionFactory = $collectionFactory;
        $this->_productRepository = $productRepository;

        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    public function getCategoryCollection ($isActive = true, $level =  false, $sortBy = false, $pageSize = false)
    {
        $collection = $this->_categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*');


        // Select only active categories
        if ($isActive) {
            $collection->addIsActiveFilter();
        }

        // Select categories of certain level
        if ($level) {
            $collection->addLevelFilter($level);
        }

        // Sort Categories by some value
        if ($sortBy) {
            $collection->addOrderField($sortBy);
        }

        // Select certain number of categories
        if ($pageSize) {
            $collection->setPageSize($pageSize);
        }

        return $collection;
    }

    public function getProductById($id)
    {
        return $this->_productRepository->getById($id);
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    public function getCurrentCategory() {
        return $this->_registry->registry('current_category');
    }
}