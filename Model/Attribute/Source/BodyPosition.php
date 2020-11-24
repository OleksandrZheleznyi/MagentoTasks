<?php

namespace Perspective\BodyPositionAttribute\Model\Attribute\Source;

class BodyPosition extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Top'), 'value' => '1'],
                ['label' => __('Bottom'), 'value' => '2'],
                ['label' => __('Left'), 'value' => '3'],
                ['label' => __('Right'), 'value' => '4']
            ];
        }
        return $this->_options;
    }
}