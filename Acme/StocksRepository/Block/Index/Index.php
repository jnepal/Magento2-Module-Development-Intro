<?php


namespace Acme\StocksRepository\Block\Index;
use Magento\CatalogInventory\Model\Stock\StockItemRepository;
use Magento\Framework\View\Element\Template;

class Index extends Template
{
    protected $_stockItemRepository;

    public function __construct(Template\Context $context,
                                StockItemRepository $stockItemRepository,
                                array $data = [])
    {
        $this->_stockItemRepository = $stockItemRepository;
        parent::__construct($context, $data);
    }

    public function getStockItem($productId)
    {
        return $this->_stockItemRepository->get($productId);
    }
}
