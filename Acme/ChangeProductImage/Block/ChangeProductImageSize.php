<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/6/17
 * Time: 16:46
 */

namespace Acme\ChangeProductImage\Block;

use Magento\Framework\Validator\Test\Unit\Test\IsTrue;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Helper\Image;

class ChangeProductImageSize extends Template
{
    protected $_productRepository;
    protected $_productImageHelper;

    public function __construct(Template\Context $context, ProductRepository $productRepository, Image $productImageHelper, array $data = [])
    {
        $this->_productRepository = $productRepository;
        $this->_productImageHelper = $productImageHelper;

        parent::__construct($context, $data);
    }

    public function getProductId($id)
    {
        return $this->_productRepository->getById($id);
    }

    public function getProductBySku($sku)
    {
        return $this->_productRepository->getById($sku);
    }

    /**
     * Resize Image
     */
    public function resizeImage($product, $imageId, $width, $height = null)
    {
        $resizedImage = $this->_productImageHelper()
                            ->init($product, $imageId)
                            ->constrainOnly(true)
                            ->keepAspectRatio(true)
                            ->keepTransparency(true)
                            ->keepFrame(false)
                            ->resize($width, $height);

        return $resizedImage;
    }
}