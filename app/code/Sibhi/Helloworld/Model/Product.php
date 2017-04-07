<?php
 
namespace Sibhi\Helloworld\Model;
 
class Product extends \Magento\Catalog\Model\Product
{    
    /**
     * Get product name
     *
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
            return "Apple ".$result; // Adding Apple in product name
    }
}
?>