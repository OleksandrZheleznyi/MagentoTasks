<?php

namespace Perspective\BodyPositionAttribute\Model\Attribute\Backend;

class BodyPosition extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{
    /**
     * Validate
     * @param \Magento\Catalog\Model\Product $object
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return bool
     */
    //For admin panel
    // public function validate($object)
    // {
    //     $value = $object->getData($this->getAttribute()->getAttributeCode());
    //     if ( ($object->getAttributeSetId() == 10) && ($value == 'wool')) {
    //         throw new \Magento\Framework\Exception\LocalizedException(
    //             __('Bottom can not be wool.')
    //         );
    //     }
    //     return true;
    // }
}