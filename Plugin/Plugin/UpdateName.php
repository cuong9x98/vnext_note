<?php
namespace Vnext\Plugin\Plugin;

class UpdateName
{
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $name = "Before";
        return [$name];
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = "After";
        return $result;
    }
}
