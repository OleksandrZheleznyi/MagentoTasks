<?php

namespace Perspective\BodyPositionAttribute\Model\Attribute\Frontend;

class BodyPosition extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{
    public function getValue(\Magento\Framework\DataObject $object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());

        $result = $this->getMass(strval($value));

        if (!$result)
        {
            return "";
        }

        $label = $object->getAttributeText($this->getAttribute()->getAttributeCode());

        return $label . "(top: " . $result['x'] . "/left: " . $result['y'] . ")";
    }

    protected $mass =
    [
        '1' => ['x' => 10, 'y' => 50],
        '2' => ['x' => 35, 'y' => 65],
        '3' => ['x' => 125, 'y' => 15],
        '4' => ['x' => 99, 'y' => 99],
    ];

    protected function getMass(string $val)
    {
        $value = $val;

        if (array_key_exists($value, $this->mass))
        {
            $returnParam = $this->mass[$value];
        }

        return $returnParam;
    }
}