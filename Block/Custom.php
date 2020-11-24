<?php

namespace Perspective\BodyPositionAttribute\Block;

class Custom extends \Magento\Catalog\Block\Product\View
{
    /**
    * @var \Magento\Catalog\Model\ResourceModel\Product
    */

    //private $productResource;

    public function __construct(
        //\Magento\Catalog\Model\ResourceModel\Product $productResource,
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        array $data = []
    ) {
        //$this->productResource = $productResource;
        parent::__construct(
            $context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency,
            $data);
    }

    public function ReturnAttributte()
    {
        $_product = $this->getProduct();
 
        $attributes = $_product->getAttributes();

        $positionLabel = $attributes['body_position']->getFrontendLabel();

        $positionAttribute = $attributes['body_position']->getFrontend()->getValue($_product);

        return "<b>" . $positionLabel . ": ". "</b>". $positionAttribute;
    }
}